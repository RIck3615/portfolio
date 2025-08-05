@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="py-20 text-white gradient-bg">
    <div class="max-w-4xl px-4 mx-auto text-center">
        <h1 class="mb-6 text-5xl font-bold">Contactez Rick Kasenga</h1>
        <p class="text-xl opacity-90">Un projet, une question ? Je vous réponds rapidement !</p>
    </div>
</section>

<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-2xl px-4 mx-auto">
        @if(session('success'))
            <div class="p-4 mb-6 text-green-700 bg-green-100 border border-green-400 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="p-4 mb-6 text-red-700 bg-red-100 border border-red-400 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="p-4 mb-6 text-red-700 bg-red-100 border border-red-400 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="p-8 space-y-6 bg-white rounded-lg shadow-lg dark:bg-gray-900">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nom</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:text-white" placeholder="Votre nom">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:text-white" placeholder="Votre email">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Message</label>
                <textarea name="message" id="message" rows="5" required
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:text-white" placeholder="Votre message">{{ old('message') }}</textarea>
            </div>
            <div>
                <button type="submit"
                    class="w-full px-6 py-3 font-semibold text-white transition-colors bg-blue-600 rounded-lg hover:bg-blue-700 hover-scale">
                    Envoyer à Rick Kasenga
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
