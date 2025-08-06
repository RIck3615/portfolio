# Utiliser l'image PHP officielle avec Nginx
FROM php:8.2-fpm-alpine

# Installer les dépendances système
RUN apk add --no-cache \
    nginx \
    nodejs \
    npm \
    git \
    unzip \
    zip \
    libpng-dev \
    libzip-dev \
    oniguruma-dev

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install \
    pdo_mysql \
    pdo_sqlite \
    mbstring \
    zip \
    gd

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Créer le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers de configuration Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Copier les fichiers du projet
COPY . .

# Rendre les scripts exécutables
RUN chmod +x render-build.sh render-start.sh

# Changer les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Exposer le port 80
EXPOSE 80

# Commande par défaut
CMD ["./render-start.sh"]
