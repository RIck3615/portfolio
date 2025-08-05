@extends('layouts.app')

@section('title', 'Mes Projets')

@section('content')
<section class="py-20 text-white gradient-bg">
    <div class="max-w-4xl px-4 mx-auto text-center">
        <h1 class="mb-6 text-5xl font-bold">Mes Projets</h1>
        <p class="text-xl opacity-90">Voici quelques réalisations dont je suis fier</p>
    </div>
</section>

<section class="py-20 bg-white dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Projet 1 : Bora Health -->
            <div class="overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 hover-scale">
                <div class="flex items-center justify-center h-48 bg-gradient-to-r from-green-400 to-blue-500">
                    <span class="text-3xl font-bold text-white">Bora Health</span>
                </div>
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-semibold">Bora Health</h3>
                    <p class="mb-4 text-gray-600 dark:text-gray-400">
                        Plateforme médicale africaine de type ERP, permettant la gestion complète des établissements de santé (patients, rendez-vous, dossiers médicaux, facturation, pharmacie, etc.).
                    </p>
                    <div class="flex flex-wrap gap-2 mb-2">
                        <span class="px-3 py-1 text-sm text-green-800 bg-green-100 rounded-full">Laravel</span>
                        <span class="px-3 py-1 text-sm text-blue-800 bg-blue-100 rounded-full">Vue.js</span>
                        <span class="px-3 py-1 text-sm text-purple-800 bg-purple-100 rounded-full">ERP</span>
                    </div>
                    <!-- Lien si disponible -->
                    <!-- <a href="https://borahealth.example.com" target="_blank" class="text-blue-600 hover:underline">Voir le projet</a> -->
                </div>
            </div>

            <!-- Projet 2 : Wewa -->
            <div class="overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 hover-scale">
                <div class="flex items-center justify-center h-48 bg-gradient-to-r from-yellow-400 to-pink-500">
                    <span class="text-3xl font-bold text-white">Wewa</span>
                </div>
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-semibold">Wewa (version Uber pour moto-taxi)</h3>
                    <p class="mb-4 text-gray-600 dark:text-gray-400">
                        Application mobile innovante pour la réservation de moto-taxis en Afrique, inspirée du modèle Uber, facilitant la mise en relation entre conducteurs et passagers.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-2">
                        <span class="px-3 py-1 text-sm text-yellow-800 bg-yellow-100 rounded-full">Mobile</span>
                        <span class="px-3 py-1 text-sm text-blue-800 bg-blue-100 rounded-full">API Laravel</span>
                        <span class="px-3 py-1 text-sm text-pink-800 bg-pink-100 rounded-full">Géolocalisation</span>
                    </div>
                    <!-- Lien si disponible -->
                    <!-- <a href="https://wewa.example.com" target="_blank" class="text-blue-600 hover:underline">Voir le projet</a> -->
                </div>
            </div>

            <!-- Projets dynamiques depuis la base de données -->
            @foreach($projects as $project)
                <div class="overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 hover-scale">
                    <div class="h-48 bg-gradient-to-r from-blue-400 to-purple-500"></div>
                    <div class="p-6">
                        <h3 class="mb-2 text-xl font-semibold">{{ $project->title }}</h3>
                        <p class="mb-4 text-gray-600 dark:text-gray-400">{{ $project->description }}</p>
                        @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="text-blue-600 hover:underline">Voir le projet</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
