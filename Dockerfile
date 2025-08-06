FROM php:8.2-apache

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libpng-dev \
    libzip-dev \
    libonig-dev \
    nodejs \
    npm \
    sqlite3 \
    curl \
    && rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP
RUN docker-php-ext-install \
    pdo_mysql \
    pdo_sqlite \
    mbstring \
    zip \
    gd \
    bcmath

# Activer mod_rewrite pour Apache
RUN a2enmod rewrite

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurer Apache
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
        DirectoryIndex index.php index.html\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier d'abord les fichiers de configuration pour optimiser le cache Docker
COPY composer.json composer.lock* ./
COPY package.json package-lock.json* ./

# Installer les dépendances Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Installer les dépendances npm
RUN npm ci --only=production

# Copier le reste des fichiers
COPY . .

# Créer les fichiers et dossiers nécessaires
RUN cp .env.example .env \
    && mkdir -p database \
    && touch database/database.sqlite \
    && mkdir -p storage/logs \
    && mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p bootstrap/cache

# Build des assets
RUN npm run build

# Générer la clé d'application
RUN php artisan key:generate --force

# Exécuter les migrations
RUN php artisan migrate --force

# Cache des configurations
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Définir les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage \
    && chmod -R 755 bootstrap/cache \
    && chmod 664 database/database.sqlite

# Nettoyer
RUN npm cache clean --force \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Exposer le port 80
EXPOSE 80

# Démarrer Apache
CMD ["apache2-foreground"]
