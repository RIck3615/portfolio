@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<!-- Hero Section avec animation -->
<section class="relative py-32 overflow-hidden text-white gradient-bg">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-purple-600/20"></div>
    <div class="absolute inset-0">
        <div class="absolute rounded-full top-20 left-20 w-72 h-72 bg-white/10 blur-3xl animate-pulse"></div>
        <div class="absolute delay-1000 rounded-full bottom-20 right-20 w-96 h-96 bg-purple-500/10 blur-3xl animate-pulse"></div>
    </div>
    <div class="relative z-10 max-w-6xl px-4 mx-auto text-center">
        <div class="animate-fade-in-up">
            <h1 class="mb-6 text-6xl font-bold md:text-7xl">
                À propos de
                <span class="block text-transparent bg-gradient-to-r from-blue-200 to-purple-200 bg-clip-text">Rick Kasenga</span>
            </h1>
            <p class="max-w-3xl mx-auto text-xl md:text-2xl opacity-90">
                Développeur Web Full-Stack passionné par la création d'expériences web exceptionnelles
            </p>
        </div>
    </div>
</section>

<!-- Présentation moderne -->
<section class="py-24 bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-7xl">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <!-- Texte de présentation -->
            <div class="space-y-8">
                <div class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 rounded-full bg-blue-50 dark:bg-blue-900/20 dark:text-blue-400">
                    <span class="w-2 h-2 mr-2 bg-blue-500 rounded-full animate-pulse"></span>
                    Développeur Full-Stack
                </div>

                <h2 class="text-4xl font-bold text-gray-900 dark:text-white">
                    Passionné par l'innovation
                    <span class="text-transparent bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text">technologique</span>
                </h2>

                <div class="space-y-6 text-lg text-gray-600 dark:text-gray-300">
                    <p>
                        Professionnel passionné des technologies de l'information, doté de plus de 5 ans d'expérience dans le développement d'applications web, le support informatique, l'analyse de données, la gestion de bases de données et le développement web.
                    </p>
                    <p>
                        Solide maîtrise des environnements techniques, avec un excellent sens de l'analyse, une rigueur constante et une grande capacité à résoudre rapidement les problèmes.
                    </p>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">5+</div>
                        <div class="text-sm text-gray-500">Années d'expérience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600">50+</div>
                        <div class="text-sm text-gray-500">Projets réalisés</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600">100%</div>
                        <div class="text-sm text-gray-500">Satisfaction client</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col gap-4 pt-8 sm:flex-row">
                    <a href="#" class="inline-flex items-center justify-center px-8 py-3 font-semibold text-white transition-all duration-300 transform rounded-lg bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Télécharger CV
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3 font-semibold text-blue-600 transition-all duration-300 transform border-2 border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Me contacter
                    </a>
                </div>
            </div>

            <!-- Image/Illustration moderne -->
            <div class="relative">
                <div class="relative z-10">
                    <div class="relative mx-auto w-80 h-80">
                        <!-- Cercle principal avec gradient animé -->
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500 animate-spin-slow"></div>
                        <div class="absolute flex items-center justify-center bg-white rounded-full inset-2 dark:bg-gray-800">
                            <div class="text-center">
                                <div class="flex items-center justify-center w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-blue-500 to-purple-600">
                                    <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Rick Kasenga</h3>
                                <p class="text-gray-600 dark:text-gray-400">Full-Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Éléments flottants décoratifs -->
                <div class="absolute w-20 h-20 bg-yellow-400 rounded-full top-10 -right-10 opacity-20 animate-bounce"></div>
                <div class="absolute w-16 h-16 bg-green-400 rounded-full bottom-20 -left-10 opacity-20 animate-pulse"></div>
                <div class="absolute w-12 h-12 bg-red-400 rounded-full top-1/2 -right-5 opacity-20 animate-ping"></div>
            </div>
        </div>
    </div>
</section>

<!-- Études Section avec timeline moderne -->
<section class="py-24 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-6xl px-4 mx-auto">
        <div class="mb-16 text-center">
            <div class="inline-flex items-center px-4 py-2 mb-6 text-sm font-medium text-purple-600 rounded-full bg-purple-50 dark:bg-purple-900/20 dark:text-purple-400">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Parcours académique
            </div>
            <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Études</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300">Mon parcours académique</p>
        </div>

        <!-- Timeline moderne -->
        <div class="relative">
            <!-- Ligne de timeline -->
            <div class="absolute left-1/2 transform -translate-x-px h-full w-0.5 bg-gradient-to-b from-blue-500 to-purple-500"></div>

            <!-- Étude actuelle -->
            <div class="relative mb-12">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8 text-right">
                        <div class="p-6 bg-white border-l-4 border-blue-500 rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-3 py-1 text-sm text-blue-600 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-400">En cours</span>
                                <span class="text-sm text-gray-500">Actuellement</span>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Maîtrise ès sciences (technologie de l'information)</h3>
                            <p class="font-medium text-blue-600 dark:text-blue-400">Université du Québec</p>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Profil professionnel (1775)</p>
                        </div>
                    </div>
                    <div class="absolute w-4 h-4 transform -translate-x-1/2 bg-blue-500 border-4 border-white rounded-full left-1/2 dark:border-gray-900"></div>
                    <div class="w-1/2 pl-8"></div>
                </div>
            </div>

            <!-- Étude précédente -->
            <div class="relative">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8"></div>
                    <div class="absolute w-4 h-4 transform -translate-x-1/2 bg-purple-500 border-4 border-white rounded-full left-1/2 dark:border-gray-900"></div>
                    <div class="w-1/2 pl-8">
                        <div class="p-6 bg-white border-r-4 border-purple-500 rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-3 py-1 text-sm text-purple-600 bg-purple-100 rounded-full dark:bg-purple-900 dark:text-purple-400">Terminé</span>
                                <span class="text-sm text-gray-500">2013 - 2018</span>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Baccalauréat – Informatique, Programmation et Analyse</h3>
                            <p class="font-medium text-purple-600 dark:text-purple-400">ISIPA, Kinshasa</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certification IA Générative -->
            <div class="relative mb-12">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8 text-right">
                        <div class="p-6 bg-white border-l-4 border-yellow-500 rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-3 py-1 text-sm text-yellow-600 bg-yellow-100 rounded-full dark:bg-yellow-900 dark:text-yellow-400">Certification</span>
                                <span class="text-sm text-gray-500">Avril 2024</span>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Introduction à l’IA Générative</h3>
                            <p class="font-medium text-yellow-600 dark:text-yellow-400">Google via Coursera</p>
                        </div>
                    </div>
                    <div class="absolute w-4 h-4 transform -translate-x-1/2 bg-yellow-500 border-4 border-white rounded-full left-1/2 dark:border-gray-900"></div>
                    <div class="w-1/2 pl-8"></div>
                </div>
            </div>

            <!-- Certification Analyse de données -->
            <div class="relative mb-12">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8"></div>
                    <div class="absolute w-4 h-4 transform -translate-x-1/2 bg-green-500 border-4 border-white rounded-full left-1/2 dark:border-gray-900"></div>
                    <div class="w-1/2 pl-8">
                        <div class="p-6 bg-white border-r-4 border-green-500 rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-3 py-1 text-sm text-green-600 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-400">Certification</span>
                                <span class="text-sm text-gray-500">Avril 2024</span>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Analyse de données</h3>
                            <p class="font-medium text-green-600 dark:text-green-400">Google via Coursera</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Diplôme d’État -->
            <div class="relative mb-12">
                <div class="flex items-center">
                    <div class="w-1/2 pr-8 text-right">
                        <div class="p-6 bg-white border-l-4 border-pink-500 rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-3 py-1 text-sm text-pink-600 bg-pink-100 rounded-full dark:bg-pink-900 dark:text-pink-400">Diplôme d’État</span>
                                <span class="text-sm text-gray-500">2006 - 2012</span>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Mathématique et Physique</h3>
                            <p class="font-medium text-pink-600 dark:text-pink-400">Ngemba 1, Kikwit</p>
                        </div>
                    </div>
                    <div class="absolute w-4 h-4 transform -translate-x-1/2 bg-pink-500 border-4 border-white rounded-full left-1/2 dark:border-gray-900"></div>
                    <div class="w-1/2 pl-8"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expérience Professionnelle moderne -->
<section class="py-24 bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-7xl">
        <div class="mb-16 text-center">
            <div class="inline-flex items-center px-4 py-2 mb-6 text-sm font-medium text-green-600 rounded-full bg-green-50 dark:bg-green-900/20 dark:text-green-400">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h2a4 4 0 014 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                </svg>
                Parcours professionnel
            </div>
            <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Expérience Professionnelle</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300">Mon parcours dans le développement et l'analyse de données</p>
        </div>
        <div class="space-y-12">
            <!-- Expérience la plus récente (déjà présente) -->
            <div class="relative flex flex-col md:flex-row items-start md:items-center bg-gradient-to-r from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-900 rounded-xl shadow-lg p-8 hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 mb-4 mr-6 text-2xl font-bold text-white bg-blue-600 rounded-full md:mb-0">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h2a4 4 0 014 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                    </svg>
                </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Technicien & Analyste de Données – Consultant</h3>
                        <p class="text-lg text-blue-600 dark:text-blue-400">DP Solutions de Financement des Entreprises – Desjardins, Montréal</p>
                    <span class="block mb-2 text-sm text-gray-500 dark:text-gray-400">Sept. 2024 – Aujourd'hui</span>
                    <ul class="space-y-1 text-gray-600 list-disc list-inside dark:text-gray-300">
                        <li>Analyse, validation et migration de données complexes dans le cadre de projets de syndication bancaire vers la plateforme LOAN IQ.</li>
                        <li>Développement de scripts automatisés pour l'intégration et le traitement des données financières.</li>
                        <li>Conception de requêtes SQL avancées pour l'extraction et la manipulation de données.</li>
                        <li>Préparation technique des dossiers (deals et facilities) pour les prêts interbancaires.</li>
                        <li>Collaboration étroite avec les analystes fonctionnels et les gestionnaires de projets pour assurer la conformité des données migrées.</li>
                        <li>Rédaction de rapports techniques et communication proactive sur l'état d'avancement des projets.</li>
                    </ul>
                </div>
            </div>

            <!-- Expérience précédente -->
            <div class="relative flex flex-col md:flex-row items-start md:items-center bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-900 dark:to-gray-800 rounded-xl shadow-lg p-8 hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 mb-4 mr-6 text-2xl font-bold text-white bg-green-600 rounded-full md:mb-0">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Commis à la gestion de données | Préproduction numérique</h3>
                    <p class="text-lg text-green-600 dark:text-green-400">36pix – Montréal</p>
                    <span class="block mb-2 text-sm text-gray-500 dark:text-gray-400">Août – Décembre 2023</span>
                    <ul class="space-y-1 text-gray-600 list-disc list-inside dark:text-gray-300">
                        <li>Traitement et retouche d'images sur fond vert à l'aide de systèmes d'extraction automatisée.</li>
                        <li>Vérification de la qualité visuelle des images destinées à la production de masse (photographie scolaire et commerciale).</li>
                        <li>Utilisation avancée de Microsoft Excel pour la planification, le suivi de projets et la coordination des étapes de préproduction.</li>
                        <li>Collaboration avec les équipes de production pour assurer le respect des délais et des normes de qualité.</li>
                        <li>Soutien technique et organisationnel dans un environnement à haut volume et à cadence rapide.</li>
                    </ul>
                </div>
            </div>

            <!-- Expérience encore plus ancienne -->
            <div class="relative flex flex-col md:flex-row items-start md:items-center bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-900 rounded-xl shadow-lg p-8 hover:scale-[1.02] transition-transform">
                <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 mb-4 mr-6 text-2xl font-bold text-white bg-purple-600 rounded-full md:mb-0">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 01-8 0"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Développeur back-end | Support et gestion des systèmes</h3>
                    <p class="text-lg text-purple-600 dark:text-purple-400">Global Service – Kinshasa, R.D. Congo</p>
                    <span class="block mb-2 text-sm text-gray-500 dark:text-gray-400">Août 2018 – Janvier 2022</span>
                    <ul class="space-y-1 text-gray-600 list-disc list-inside dark:text-gray-300">
                        <li>Créer et maintenir le code qui gère la logique métier (business logic).</li>
                        <li>Implémenter les fonctionnalités principales : authentification, gestion des utilisateurs, paiements, etc.</li>
                        <li>Concevoir et optimiser la structure des bases de données (SQL ou NoSQL).</li>
                        <li>Écrire des requêtes efficaces (lecture, insertion, mise à jour, suppression).</li>
                        <li>Assurer l’intégrité et la sécurité des données.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fade-in-up {
    from { opacity: 0; transform: translateY(40px);}
    to { opacity: 1; transform: translateY(0);}
}
.animate-fade-in-up {
    animation: fade-in-up 1s cubic-bezier(.4,0,.2,1) both;
}
@keyframes spin-slow {
    0% { transform: rotate(0deg);}
    100% { transform: rotate(360deg);}
}
.animate-spin-slow {
    animation: spin-slow 10s linear infinite;
}
</style>
@endsection
