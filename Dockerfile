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

# Copier et installer les dépendances
COPY composer.json ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

COPY package.json package-lock.json* ./
RUN npm install --production

# Copier tout le reste
COPY . .

# Configuration Laravel
RUN cp .env.example .env \
    && mkdir -p database storage/{logs,framework/{cache,sessions,views}} bootstrap/cache \
    && touch database/database.sqlite \
    && npm run build \
    && php artisan key:generate --force \
    && php artisan migrate --force

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"] 