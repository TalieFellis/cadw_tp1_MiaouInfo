<x-layout :titre="'MiaouInfo | Faits sur les chats'">

    <div class="container mx-auto py-12 text-center">
        <h1 class="text-5xl font-bold text-gray-900 mb-8">Bienvenue à MiaouInfo</h1>
        <h2 class="text-2xl text-gray-900 mb-8">Tout ce que vous ne saviez pas sur les chats</h2>

        <!-- Affichage du fait aléatoire -->
        <div class="bg-gray-800 text-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-3xl mb-4">Fait aléatoire No {{ $fait->id }}</h2>
            <p class="text-lg">{{ $fait->fait }}</p>
        </div>

        <!-- Affichage des images de chats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
            <img src="https://cataas.com/cat/says/Hello" alt="Chat qui dit Hello !" class="rounded-lg shadow-md">
            <img src="https://cataas.com/cat/says/Meow" alt="Chat qui dit Meow !" class="rounded-lg shadow-md">
            <img src="https://cataas.com/cat/says/Cat" alt="Chat qui dit chat" class="rounded-lg shadow-md">
            <img src="https://cataas.com/cat/says/Purr" alt="Chat qui ronronne" class="rounded-lg shadow-md">
        </div>

        <!-- Liens vers la liste et la création de faits -->
        <div class="flex justify-center space-x-4">
            <a href="{{ route('faits.index') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Voir tous les faits</a>
            <a href="{{ route('faits.create') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700">Ajouter un fait</a>
        </div>
    </div>

</x-layout>
