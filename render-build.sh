#!/usr/bin/env bash
# Exit on error
set -o errexit

# Mise à jour des paquets
echo "📦 Installation des dépendances Composer..."
composer install --no-dev --optimize-autoloader

# Installation des dépendances npm
echo "🔧 Installation des dépendances npm..."
npm ci

# Build des assets
echo "🏗️ Build des assets frontend..."
npm run build

# Copie du fichier .env
echo "⚙️ Configuration de l'environnement..."
cp .env.example .env

# Génération de la clé d'application
echo "🔑 Génération de la clé d'application..."
php artisan key:generate --ansi

# Cache des configurations
echo "⚡ Cache des configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Migrations de la base de données
echo "🗄️ Exécution des migrations..."
php artisan migrate --force

echo "✅ Build terminé avec succès!"
