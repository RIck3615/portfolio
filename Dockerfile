FROM php:8.1-apache

# Installer les outils de base
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    sqlite3 \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Configuration Apache
RUN a2enmod rewrite
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

# Copier tout le projet
COPY . .

# Supprimer composer.lock pour éviter les conflits
RUN rm -f composer.lock

# Installer Composer globalement
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Préparation de l'environnement
RUN cp .env.example .env \
    && mkdir -p database storage/{logs,framework/{cache,sessions,views}} bootstrap/cache \
    && touch database/database.sqlite

# Installation des dépendances Composer sans le lock file
RUN COMPOSER_ALLOW_SUPERUSER=1 composer update --no-dev --optimize-autoloader --no-interaction

# Installation npm et build
RUN npm install --production \
    && npm run build

# Configuration Laravel
RUN php artisan key:generate --force \
    && php artisan migrate --force

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"]
