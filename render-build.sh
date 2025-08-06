#!/usr/bin/env bash
# Exit on error
set -o errexit

echo "🚀 Début du processus de build..."

# Vérifier si les fichiers nécessaires existent
if [ ! -f "composer.json" ]; then
    echo "❌ Erreur: composer.json non trouvé"
    exit 1
fi

if [ ! -f "package.json" ]; then
    echo "❌ Erreur: package.json non trouvé"
    exit 1
fi

# Mise à jour des paquets Composer
echo "📦 Installation des dépendances Composer..."
composer install --no-dev --optimize-autoloader --no-interaction

# Installation des dépendances npm
echo "🔧 Installation des dépendances npm..."
npm ci --only=production

# Build des assets
echo "🏗️ Build des assets frontend..."
npm run build

# Vérifier si le fichier .env existe, sinon le créer
if [ ! -f ".env" ]; then
    echo "⚙️ Création du fichier .env..."
    cp .env.example .env
fi

# Génération de la clé d'application si elle n'existe pas
echo "🔑 Génération de la clé d'application..."
php artisan key:generate --ansi --force

# Créer la base de données SQLite si elle n'existe pas
echo "🗄️ Préparation de la base de données..."
if [ ! -f "database/database.sqlite" ]; then
    touch database/database.sqlite
fi

# Migrations de la base de données
echo "🗄️ Exécution des migrations..."
php artisan migrate --force --no-interaction

# Cache des configurations pour la production
echo "⚡ Optimisation pour la production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Nettoyage
echo "🧹 Nettoyage des fichiers temporaires..."
npm cache clean --force
composer clear-cache

echo "✅ Build terminé avec succès!"
