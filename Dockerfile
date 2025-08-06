FROM php:8.2-apache

# Installer uniquement les dépendances essentielles
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    sqlite3 \
    nodejs \
    npm \
    libzip-dev \
    libonig-dev \
    && rm -rf /var/lib/apt/lists/*

# Installer uniquement les extensions PHP essentielles
RUN docker-php-ext-install \
    pdo_sqlite \
    mbstring \
    zip

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

# Copier les fichiers de config
COPY composer.json package.json ./
COPY composer.lock* package-lock.json* ./

# Installer les dépendances
RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN npm ci --only=production

# Copier le reste
COPY . .

# Configuration Laravel
RUN cp .env.example .env \
    && mkdir -p database storage/logs storage/framework/{cache,sessions,views} bootstrap/cache \
    && touch database/database.sqlite \
    && npm run build \
    && php artisan key:generate --force \
    && php artisan migrate --force \
    && php artisan config:cache

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"]
