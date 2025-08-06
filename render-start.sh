#!/usr/bin/env bash

# Démarrer le serveur PHP-FPM en arrière-plan
php-fpm -D

# Démarrer Nginx
nginx -g "daemon off;"
