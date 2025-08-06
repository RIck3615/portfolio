@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Hero Section avec animation -->
<section class="relative py-24 overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20"></div>
        <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 rounded-full w-72 h-72 bg-white/10 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2 rounded-full w-96 h-96 bg-purple-500/10 blur-3xl"></div>
    </div>

    <div class="relative max-w-4xl px-4 mx-auto text-center">
        <div class="animate-fade-in-up">
            <h1 class="mb-6 text-6xl font-bold leading-tight text-white">
                Contactez
                <span class="text-transparent bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text">
                    Rick Kasenga
                </span>
            </h1>
            <p class="max-w-2xl mx-auto text-xl leading-relaxed text-white/90">
                Prêt à transformer vos idées en réalité ? Parlons de votre projet et créons quelque chose d'extraordinaire ensemble.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-4xl px-4 mx-auto">
        <!-- Alertes avec animations -->
        @if(session('success'))
            <div class="p-6 mb-8 text-green-800 border-l-4 border-green-400 rounded-lg shadow-lg animate-slide-in-down bg-green-50">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="p-6 mb-8 text-red-800 border-l-4 border-red-400 rounded-lg shadow-lg animate-slide-in-down bg-red-50">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="p-6 mb-8 text-red-800 border-l-4 border-red-400 rounded-lg shadow-lg animate-slide-in-down bg-red-50">
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-0.5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    <div>
                        <span class="font-medium">Veuillez corriger les erreurs suivantes :</span>
                        <ul class="mt-2 space-y-1 list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid gap-12 lg:grid-cols-2">
            <!-- Informations de contact -->
            <div class="space-y-8">
                <div class="animate-fade-in-left">
                    <h2 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">
                        Parlons d'un projet
                    </h2>
                    <p class="mb-8 text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                        Que vous ayez une idée précise ou que vous cherchiez simplement à explorer les possibilités,
                        je suis là pour vous accompagner dans votre projet ou pour un emploi Permanent/Temporaire.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center p-4 bg-white border border-gray-100 shadow-sm dark:bg-gray-800 rounded-xl dark:border-gray-700">
                        <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg dark:bg-blue-900">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-900 dark:text-white">Email</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">rickkas243@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white border border-gray-100 shadow-sm dark:bg-gray-800 rounded-xl dark:border-gray-700">
                        <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 bg-green-100 rounded-lg dark:bg-green-900">
                            <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-900 dark:text-white">Localisation</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Montreal, Canada</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white border border-gray-100 shadow-sm dark:bg-gray-800 rounded-xl dark:border-gray-700">
                        <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 bg-purple-100 rounded-lg dark:bg-purple-900">
                            <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-900 dark:text-white">Réponse rapide</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Sous 24h</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="animate-fade-in-right">
                <form action="{{ route('contact.send') }}" method="POST" class="p-8 bg-white border border-gray-100 shadow-xl dark:bg-gray-800 rounded-2xl dark:border-gray-700">
                    @csrf

                    <div class="space-y-6">
                        <div class="group">
                            <label for="name" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-200">
                                Nom complet
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                    class="block w-full py-3 pl-10 pr-4 placeholder-gray-400 transition-all duration-200 border border-gray-300 shadow-sm dark:border-gray-600 rounded-xl dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                    placeholder="Votre nom complet">
                            </div>
                        </div>

                        <div class="group">
                            <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-200">
                                Adresse email
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                    class="block w-full py-3 pl-10 pr-4 placeholder-gray-400 transition-all duration-200 border border-gray-300 shadow-sm dark:border-gray-600 rounded-xl dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                    placeholder="votre.email@exemple.com">
                            </div>
                        </div>

                        <div class="group">
                            <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-200">
                                Votre message
                            </label>
                            <div class="relative">
                                <div class="absolute flex items-start pointer-events-none top-3 left-3">
                                    <svg class="h-5 w-5 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                </div>
                                <textarea name="message" id="message" rows="6" required
                                    class="block w-full py-3 pl-10 pr-4 placeholder-gray-400 transition-all duration-200 border border-gray-300 shadow-sm resize-none dark:border-gray-600 rounded-xl dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                    placeholder="Décrivez votre projet, vos besoins ou posez-moi vos questions...">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="relative w-full px-8 py-4 font-semibold text-white transition-all duration-200 transform shadow-lg group bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 hover:scale-105 active:scale-95">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Envoyer le message
                                </span>
                                <div class="absolute inset-0 transition-opacity duration-200 opacity-0 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 group-hover:opacity-100"></div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Styles CSS pour les animations -->
<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in-left {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fade-in-right {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slide-in-down {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out;
    }

    .animate-fade-in-left {
        animation: fade-in-left 0.8s ease-out;
    }

    .animate-fade-in-right {
        animation: fade-in-right 0.8s ease-out;
    }

    .animate-slide-in-down {
        animation: slide-in-down 0.5s ease-out;
    }

    .hover-scale:hover {
        transform: scale(1.02);
    }
</style>
@endsection
