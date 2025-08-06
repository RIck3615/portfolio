#!/usr/bin/env bash

echo "🚀 Démarrage de l'application..."

# Créer les répertoires nécessaires s'ils n'existent pas
mkdir -p /var/run/nginx
mkdir -p /var/www/html/storage/logs

# Vérifier les permissions
chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache

# Démarrer PHP-FPM en arrière-plan
echo "🔧 Démarrage de PHP-FPM..."
php-fpm -D

# Attendre que PHP-FPM soit prêt
sleep 2

# Démarrer Nginx
echo "🌐 Démarrage de Nginx..."
nginx -g "daemon off;"
