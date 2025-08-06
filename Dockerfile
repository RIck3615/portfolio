FROM php:8.1-apache

# Installer uniquement Node.js et les outils de base
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    sqlite3 \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean \
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
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

# Copier TOUS les fichiers d'abord
COPY . .

# Créer le fichier .env avant d'installer les dépendances
RUN cp .env.example .env

# Créer les dossiers nécessaires
RUN mkdir -p database \
    && mkdir -p storage/logs \
    && mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p bootstrap/cache \
    && touch database/database.sqlite

# Installer les dépendances Composer SANS les scripts post-install
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Installer les dépendances npm
RUN npm install --production

# Build des assets
RUN npm run build

# Maintenant exécuter les commandes Laravel
RUN php artisan key:generate --force \
    && php artisan package:discover --ansi \
    && php artisan migrate --force

# Définir les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage \
    && chmod -R 755 bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"]
