# Utiliser une image qui a déjà Node.js et PHP
FROM php:8.2-apache

# Installer uniquement les dépendances de base
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    sqlite3 \
    && rm -rf /var/lib/apt/lists/*

# Activer mod_rewrite
RUN a2enmod rewrite

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuration Apache
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
        DirectoryIndex index.php index.html\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

# Copier le projet
COPY . .

# Préparation Laravel
RUN cp .env.example .env \
    && mkdir -p database storage/{logs,framework/{cache,sessions,views}} bootstrap/cache \
    && touch database/database.sqlite

# Installer Composer avec ignore platform requirements
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Créer les assets manuellement (sans npm build)
RUN mkdir -p public/build/assets \
    && echo '/* Styles de base */' > public/build/assets/app.css \
    && echo 'console.log("App loaded");' > public/build/assets/app.js \
    && echo '{"assets/app.css":{"file":"assets/app.css","isEntry":true},"assets/app.js":{"file":"assets/app.js","isEntry":true}}' > public/build/manifest.json

# Configuration Laravel
RUN php artisan key:generate --force \
    && php artisan migrate --force

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"]
