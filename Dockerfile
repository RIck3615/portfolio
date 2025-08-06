# Utiliser une image qui a déjà Node.js et PHP
FROM php:8.2-apache

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    sqlite3 \
    gnupg \
    && rm -rf /var/lib/apt/lists/*

# Installer Node.js via le script officiel NodeSource
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash -
RUN apt-get install -y nodejs

# Vérifier que Node.js et npm sont installés et fonctionnels
RUN which node && which npm && node --version && npm --version

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

# Préparation
RUN cp .env.example .env \
    && mkdir -p database storage/{logs,framework/{cache,sessions,views}} bootstrap/cache \
    && touch database/database.sqlite

# Installer les dépendances Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Installer les dépendances npm avec plus de verbosité pour debug
RUN npm --version
RUN npm install --production --verbose
RUN npm run build --verbose

# Configuration Laravel
RUN php artisan key:generate --force \
    && php artisan migrate --force

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"]
