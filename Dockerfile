# Utiliser l'image PHP officielle avec FPM
FROM php:8.2-fpm-alpine

# Installer les dépendances système nécessaires
RUN apk add --no-cache \
    nginx \
    nodejs \
    npm \
    git \
    unzip \
    zip \
    bash \
    # Dépendances pour les extensions PHP
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    sqlite-dev \
    # Outils de build
    autoconf \
    g++ \
    make \
    # Dépendances supplémentaires
    curl \
    wget

# Configurer et installer les extensions PHP
RUN docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        pdo_sqlite \
        mbstring \
        zip \
        gd \
        bcmath \
        opcache

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuration PHP pour la production
RUN echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.memory_consumption=128" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.interned_strings_buffer=8" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.max_accelerated_files=4000" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.revalidate_freq=2" >> /usr/local/etc/php/conf.d/opcache.ini

# Créer le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers de configuration Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Copier les fichiers du projet
COPY . .

# Créer la base de données SQLite si elle n'existe pas
RUN touch /var/www/html/database/database.sqlite

# Rendre les scripts exécutables
RUN chmod +x render-build.sh render-start.sh

# Créer les répertoires nécessaires et définir les permissions
RUN mkdir -p /var/www/html/storage/logs \
    && mkdir -p /var/www/html/storage/framework/cache \
    && mkdir -p /var/www/html/storage/framework/sessions \
    && mkdir -p /var/www/html/storage/framework/views \
    && mkdir -p /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache \
    && chmod 664 /var/www/html/database/database.sqlite

# Exposer le port 80
EXPOSE 80

# Commande par défaut
CMD ["./render-start.sh"]
