FROM php:8.2-apache

# Installer uniquement les outils système de base
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    sqlite3 \
    && rm -rf /var/lib/apt/lists/*

# Installer Node.js directement via binaire
RUN curl -fsSL https://nodejs.org/dist/v18.19.1/node-v18.19.1-linux-x64.tar.xz | tar -xJ -C /usr/local --strip-components=1

# Vérifier Node.js
RUN node --version && npm --version

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

# Copier tout le projet
COPY . .

# Préparation des dossiers
RUN cp .env.example .env \
    && mkdir -p database storage/{logs,framework/{cache,sessions,views}} bootstrap/cache \
    && touch database/database.sqlite

# Installer les dépendances Composer en ignorant les requirements de plateforme
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Installation NPM et build
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
