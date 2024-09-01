<x-layout :titre="'MiaouInfo | Faits sur les chats'">

    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold font-dm">Des faits félins qui vous feront ronronner!</h1>

        <!-- Affichage du fait aléatoire -->
        <div class="bg-custom-brown p-6 mt-24 mb-6 rounded-lg shadow-md">
            <h2 class="text-3xl mb-4 font-dm">Fait aléatoire No {{ $fait->id }}</h2>
            <p class="text-lg">{{ $fait->fait }}</p>
        </div>

        <!-- Affichage des images de chats -->
        <div class="flex justify-center">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <img src="https://cataas.com/cat/says/Hello" alt="Chat qui dit Hello !" class="h-96 w-full rounded-lg shadow-md">
                <img src="https://cataas.com/cat/says/Meow" alt="Chat qui dit Meow !" class="h-96 w-96 object-cover rounded-lg shadow-md">
                <img src="https://cataas.com/cat/says/Cat" alt="Chat qui dit chat" class="h-96 w-96 object-cover rounded-lg shadow-md">
                <img src="https://cataas.com/cat/says/Purr" alt="Chat qui ronronne" class="h-96 w-96 object-cover rounded-lg shadow-md">
            </div>
        </div>

        <!-- Liens vers la liste et la création de faits -->
        <div class="flex justify-center space-x-4">
            <a href="{{ route('faits.index') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Voir tous les faits</a>
            <a href="{{ route('faits.create') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700">Ajouter un fait</a>
        </div>
    </div>

</x-layout>
