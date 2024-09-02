<x-layout :titre="'MiaouInfo | Faits sur les chats'">

    <div class="container text-center w-full">

        <section class="h-[70vh] flex flex-col justify-center p-4 mb-12 rounded-lg bg-custom-white">
            <h1 class="text-5xl font-extrabold font-dm mx-auto lg:w-[600px]">Des faits félins qui vous feront ronronner!
            </h1>

            <!-- Liens vers la liste et la création de faits -->
            <div class="flex flex-col space-y-2 mt-12 md:flex-row md:space-y-0 md:justify-center md:space-x-2">
                <a href="{{ route('faits.index') }}" class="px-6 py-3 bg-custom-blue text-custom-white font-bold rounded-lg hover:shadow-xl">Voir tous les faits</a>
                <a href="{{ route('faits.create') }}" class="px-6 py-3 bg-custom-blue text-custom-white font-bold rounded-lg hover:shadow-xl">Ajouter un fait</a>
            </div>
        </section>


        <section class="flex flex-col m-auto p-6 rounded-lg">
            <!-- Affichage du fait aléatoire -->
            <div class="mb-20">
                <h2 class="text-4xl font-dm">Fait aléatoire</h2>

                <div class="inline-flex items-center justify-center w-full">
                    <hr class="w-64 h-1 my-8 bg-custom-black border-0 rounded">
                    <div class="absolute px-4 -translate-x-1/2 bg-custom-pink left-1/2">
                        <svg class="w-4 h-4 text-custom-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                    <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                  </svg>
                    </div>
                </div>

                <p class="text-lg max-w-[800px] mx-auto">Fait #{{ $fait->id }} | {{ $fait->fait }}</p>
            </div>

            <!-- Affichage des images de chats -->
            <div class="flex justify-center w-full">
                <div class="grid grid-cols-1 gap-4 w-full md:grid-cols-2 lg:grid-cols-4">
                    <img src="https://cataas.com/cat/says/Hello" alt="Chat qui dit Hello !" class="h-64 w-full object-cover rounded-lg shadow-md">
                    <img src="https://cataas.com/cat/says/Meow" alt="Chat qui dit Meow !" class="h-64 w-full object-cover rounded-lg shadow-md">
                    <img src="https://cataas.com/cat/says/Cat" alt="Chat qui dit chat" class="h-64 w-full object-cover rounded-lg shadow-md">
                    <img src="https://cataas.com/cat/says/Purr" alt="Chat qui ronronne" class="h-64 w-full object-cover rounded-lg shadow-md">
                </div>
            </div>
        </section>

    </div>

</x-layout>
