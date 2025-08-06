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

# Créer le fichier .env avec une vraie clé générée
RUN echo 'APP_NAME="Rick Kasenga Portfolio"' > .env \
    && echo 'APP_ENV=production' >> .env \
    && echo 'APP_DEBUG=true' >> .env \
    && echo 'DB_CONNECTION=sqlite' >> .env \
    && echo 'DB_DATABASE=/var/www/html/database/database.sqlite' >> .env \
    && echo 'SESSION_DRIVER=database' >> .env \
    && echo 'CACHE_STORE=database' >> .env \
    && echo 'QUEUE_CONNECTION=database' >> .env \
    && echo 'LOG_LEVEL=debug' >> .env

# Préparation Laravel
RUN mkdir -p database storage/{logs,framework/{cache,sessions,views}} bootstrap/cache \
    && touch database/database.sqlite

# Installer Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Générer la clé APRÈS l'installation de Composer
RUN php artisan key:generate --force \
    && php artisan migrate --force

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"]
