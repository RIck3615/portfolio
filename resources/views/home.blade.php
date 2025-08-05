@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section -->
<section class="relative flex items-center justify-center min-h-screen overflow-hidden gradient-bg">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative z-10 px-4 text-center text-white">
        <div class="animate-fade-in">
            <h1 class="mb-6 text-5xl font-bold md:text-7xl text-shadow">
                Bonjour, je suis
                <span class="block text-blue-200">Rick Kasenga</span>
            </h1>
            <p class="max-w-2xl mx-auto mb-8 text-xl md:text-2xl opacity-90">
                Passionné par la création d'expériences web modernes et innovantes
            </p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="{{ route('projects') }}" class="px-8 py-3 font-semibold text-blue-600 transition-colors bg-white rounded-lg hover:bg-blue-50 hover-scale">
                    Voir mes projets
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3 font-semibold text-white transition-colors border-2 border-white rounded-lg hover:bg-white hover:text-blue-600 hover-scale">
                    Me contacter
                </a>
            </div>
        </div>
    </div>

    <!-- Animated background elements -->
    <div class="absolute w-20 h-20 bg-white rounded-full top-20 left-20 opacity-10 animate-bounce"></div>
    <div class="absolute w-32 h-32 bg-white rounded-full bottom-20 right-20 opacity-5 animate-pulse"></div>
    <div class="absolute w-16 h-16 bg-white rounded-full top-1/2 left-10 opacity-10 animate-spin"></div>
</section>

<!-- Skills Section -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-4xl font-bold gradient-text">Mes Compétences</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300">Technologies et outils que j'utilise</p>
        </div>

        <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-8">
            <!-- HTML -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-orange-100 rounded-full dark:bg-orange-900">
                    <svg class="w-10 h-10" viewBox="0 0 32 32" fill="none">
                        <g>
                            <path fill="#E34F26" d="M6.902 15.403l-1.736 19.47h20.668l-1.736-19.47-18.196 6.93z"/>
                            <path fill="#EF652A" d="M16 27.77l-10.834-4.103-1.236-13.85h12.07z"/>
                            <path fill="#FFFFFF" d="M16 13.407h-6.932l.5 5.604h6.432v-5.604zm0 11.008l-.014.004-3.505-1.055-.224-2.51h-3.29l.44 4.926 6.589 2.035z"/>
                            <path fill="#EBEBEB" d="M16.014 13.407v6.001h6.432l-.5-5.604h-5.932zm0 11.008v2.004l.014-.004 6.589-2.035.44-4.926h-3.29l-.224 2.51z"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">HTML</h3>
                <p class="text-gray-600 dark:text-gray-400">Markup</p>
            </div>

            <!-- CSS -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-blue-100 rounded-full dark:bg-blue-900">
                    <svg class="w-10 h-10" viewBox="0 0 32 32" fill="none">
                        <g>
                            <path fill="#1572B6" d="M6.902 15.403l-1.736 19.47h20.668l-1.736-19.47-18.196 6.93z"/>
                            <path fill="#33A9DC" d="M16 27.77l-10.834-4.103-1.236-13.85h12.07z"/>
                            <path fill="#FFFFFF" d="M16 13.407h-6.932l.5 5.604h6.432v-5.604zm0 11.008l-.014.004-3.505-1.055-.224-2.51h-3.29l.44 4.926 6.589 2.035z"/>
                            <path fill="#EBEBEB" d="M16.014 13.407v6.001h6.432l-.5-5.604h-5.932zm0 11.008v2.004l.014-.004 6.589-2.035.44-4.926h-3.29l-.224 2.51z"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">CSS</h3>
                <p class="text-gray-600 dark:text-gray-400">Styling</p>
            </div>

            <!-- Git -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-blue-100 rounded-full dark:bg-blue-900">
                    <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none">
                        <g>
                            <path fill="#F05032" d="M22.545 12.141L11.858 1.455a1.56 1.56 0 0 0-2.207 0l-2.2 2.2 2.53 2.53a1.564 1.564 0 0 1 1.99 1.99l2.47 2.47a1.564 1.564 0 1 1-1.06 1.06l-2.47-2.47a1.564 1.564 0 0 1-1.99-1.99l-2.53-2.53-2.2 2.2a1.56 1.56 0 0 0 0 2.207l10.687 10.687a1.56 1.56 0 0 0 2.207 0l2.2-2.2-2.53-2.53a1.564 1.564 0 0 1-1.99-1.99l-2.47-2.47a1.564 1.564 0 1 1 1.06-1.06l2.47 2.47a1.564 1.564 0 0 1 1.99 1.99l2.53 2.53 2.2-2.2a1.56 1.56 0 0 0 0-2.207z"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">Git</h3>
                <p class="text-gray-600 dark:text-gray-400">Version Control</p>
            </div>

            <!-- Laravel -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-green-100 rounded-full dark:bg-green-900">
                    <svg class="w-10 h-10" viewBox="0 0 256 256" fill="none">
                        <g>
                            <path fill="#FF2D20" d="M246.5 70.7l-56.2-32.5c-5.2-3-11.7-1.2-14.7 4l-32.5 56.2c-3 5.2-1.2 11.7 4 14.7l56.2 32.5c5.2 3 11.7 1.2 14.7-4l32.5-56.2c3-5.2 1.2-11.7-4-14.7z"/>
                            <path fill="#FF2D20" d="M9.5 185.3l56.2 32.5c5.2 3 11.7 1.2 14.7-4l32.5-56.2c3-5.2 1.2-11.7-4-14.7l-56.2-32.5c-5.2-3-11.7-1.2-14.7 4l-32.5 56.2c-3 5.2-1.2 11.7 4 14.7z"/>
                            <path fill="#FF2D20" d="M128 0c-7.2 0-13 5.8-13 13v230c0 7.2 5.8 13 13 13s13-5.8 13-13V13c0-7.2-5.8-13-13-13z"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">Laravel</h3>
                <p class="text-gray-600 dark:text-gray-400">PHP Framework</p>
            </div>

            <!-- Vue.js -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-green-100 rounded-full dark:bg-green-900">
                    <svg class="w-10 h-10" viewBox="0 0 32 32" fill="none">
                        <g>
                            <path fill="#4FC08D" d="M24.4 3.5H7.6l8.4 14.5L24.4 3.5z"/>
                            <path fill="#35495E" d="M16 0L3.2 28.5h25.6L16 0z"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">Vue.js</h3>
                <p class="text-gray-600 dark:text-gray-400">Frontend</p>
            </div>

            <!-- Livewire -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-red-100 rounded-full dark:bg-red-900">
                    <svg class="w-10 h-10" viewBox="0 0 32 32" fill="none">
                        <g>
                            <path fill="#FB70A9" d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm0 30C8.268 30 2 23.732 2 16S8.268 2 16 2s14 6.268 14 14-6.268 14-14 14z"/>
                            <path fill="#FB70A9" d="M16 4C9.373 4 4 9.373 4 16s5.373 12 12 12 12-5.373 12-12S22.627 4 16 4zm0 22C10.486 26 6 21.514 6 16S10.486 6 16 6s10 4.486 10 10-4.486 10-10 10z"/>
                            <path fill="#FB70A9" d="M16 8c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zm0 14c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">Livewire</h3>
                <p class="text-gray-600 dark:text-gray-400">Full-Stack</p>
            </div>

            <!-- Tailwind CSS -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-blue-100 rounded-full dark:bg-blue-900">
                    <svg class="w-10 h-10" viewBox="0 0 48 48" fill="none">
                        <g>
                            <path fill="#38BDF8" d="M24 12c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C36.562 33.8 40 29.302 40 24c0-6.627-5.373-12-12-12z"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">Tailwind CSS</h3>
                <p class="text-gray-600 dark:text-gray-400">CSS Framework</p>
            </div>

            <!-- JavaScript -->
            <div class="text-center hover-scale">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 bg-yellow-100 rounded-full dark:bg-yellow-900">
                    <svg class="w-10 h-10" viewBox="0 0 32 32" fill="none">
                        <g>
                            <rect width="32" height="32" rx="6" fill="#F7DF1E"/>
                            <path d="M19.5 24.1c.6 1.1 1.4 1.9 2.9 1.9 1.2 0 2-.6 2-1.4 0-1-0.8-1.3-2.2-1.9l-.8-.3c-2.3-.8-3.8-1.8-3.8-4 0-2 1.5-3.5 3.9-3.5 1.7 0 2.9.6 3.8 2.1l-2.1 1.3c-.5-.9-1-1.2-1.7-1.2-.8 0-1.3.5-1.3 1.2 0 .8.5 1.1 1.7 1.6l.8.3c2.7 1 4.2 1.9 4.2 4.1 0 2.3-1.8 3.6-4.2 3.6-2.4 0-3.9-1.1-4.7-2.5l2.2-1.3zm-8.2.2c.4.7.8 1.3 1.7 1.3.8 0 1.3-.3 1.3-1.6v-7.1h2.6v7.2c0 2.7-1.6 3.9-3.8 3.9-2 0-3.2-1-3.8-2.2l2.2-1.3z" fill="#000"/>
                        </g>
                    </svg>
                </div>
                <h3 class="mb-2 text-lg font-semibold">JavaScript</h3>
                <p class="text-gray-600 dark:text-gray-400">Frontend</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-4xl font-bold gradient-text">Projets Récents</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300">Découvrez mes derniers travaux</p>
        </div>

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
                </div>
            </div>

            <!-- Tu peux garder ou retirer les exemples ci-dessous -->
            <!-- Project Card 3 (exemple) -->
            <div class="overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 hover-scale">
                <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-500"></div>
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-semibold">Portfolio Website</h3>
                    <p class="mb-4 text-gray-600 dark:text-gray-400">Site portfolio responsive avec animations modernes</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-sm text-blue-800 bg-blue-100 rounded-full">Laravel</span>
                        <span class="px-3 py-1 text-sm text-green-800 bg-green-100 rounded-full">Tailwind</span>
                        <span class="px-3 py-1 text-sm text-yellow-800 bg-yellow-100 rounded-full">Alpine.js</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('projects') }}" class="px-8 py-3 font-semibold text-white transition-colors bg-blue-600 rounded-lg hover:bg-blue-700 hover-scale">
                Voir tous les projets
            </a>
        </div>
    </div>
</section>

<!-- Contact CTA Section moderne -->
<section class="relative py-24 overflow-hidden text-white gradient-bg">
    <!-- Éléments décoratifs animés -->
    <div class="absolute inset-0">
        <div class="absolute rounded-full top-20 left-20 w-72 h-72 bg-white/10 blur-3xl animate-pulse"></div>
        <div class="absolute delay-1000 rounded-full bottom-20 right-20 w-96 h-96 bg-purple-500/10 blur-3xl animate-pulse"></div>
        <div class="absolute w-48 h-48 rounded-full top-1/2 left-1/3 bg-blue-500/10 blur-2xl animate-spin-slow"></div>
    </div>

    <div class="relative z-10 max-w-6xl px-4 mx-auto text-center">
        <div class="animate-fade-in-up">
            <!-- Badge -->
            <div class="inline-flex items-center px-6 py-3 mb-8 text-sm font-medium border rounded-full bg-white/10 backdrop-blur-sm border-white/20">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Prêt à collaborer
            </div>

            <h2 class="mb-6 text-5xl font-bold md:text-6xl">
                Prêt à
                <span class="block text-transparent bg-gradient-to-r from-blue-200 to-purple-200 bg-clip-text">collaborer</span>
                et à être recruté
            </h2>

            <p class="max-w-3xl mx-auto mb-12 text-xl md:text-2xl opacity-90">
                Discutons de votre projet et créons quelque chose d'extraordinaire ensemble
            </p>

            <!-- Boutons modernes -->
            <div class="flex flex-col items-center gap-6 sm:flex-row sm:justify-center">
                <a href="{{ route('contact') }}"
                   class="relative inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-300 transform shadow-lg group bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl hover:from-blue-700 hover:to-purple-700 hover:scale-105 hover:shadow-xl">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Commencer un projet
                    </span>
                    <div class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-r from-blue-700 to-purple-700 rounded-xl group-hover:opacity-100"></div>
                </a>

                <a href="{{ route('about') }}"
                   class="relative inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-300 transform border-2 group border-white/30 rounded-xl hover:bg-white/10 backdrop-blur-sm hover:scale-105">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 01-8 0"></path>
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                        En savoir plus
                    </span>
                </a>
            </div>

            <!-- Stats rapides -->
            <div class="grid max-w-2xl grid-cols-3 gap-8 mx-auto mt-16">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-200">5+</div>
                    <div class="text-sm opacity-75">Années d'expérience</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-200">50+</div>
                    <div class="text-sm opacity-75">Projets réalisés</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-200">100%</div>
                    <div class="text-sm opacity-75">Satisfaction client</div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fade-in-up {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in-up {
    animation: fade-in-up 1s cubic-bezier(.4,0,.2,1) both;
}
@keyframes spin-slow {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.animate-spin-slow {
    animation: spin-slow 20s linear infinite;
}
</style>
@endsection

