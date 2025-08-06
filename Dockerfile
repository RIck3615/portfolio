FROM php:8.1-apache

# Installer les outils
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

# Copier le projet
COPY . .

# Créer un vendor minimal (juste pour que l'autoload fonctionne)
RUN mkdir -p vendor \
    && echo '<?php return [];' > vendor/autoload.php

# Préparation
RUN cp .env.example .env \
    && mkdir -p database storage/{logs,framework/{cache,sessions,views}} bootstrap/cache \
    && touch database/database.sqlite

# NPM seulement
RUN npm install --production \
    && npm run build

# Configuration minimale
RUN php -r "echo 'APP_KEY=' . bin2hex(random_bytes(16)) . PHP_EOL;" >> .env

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage bootstrap/cache \
    && chmod 664 database/database.sqlite

EXPOSE 80
CMD ["apache2-foreground"]
