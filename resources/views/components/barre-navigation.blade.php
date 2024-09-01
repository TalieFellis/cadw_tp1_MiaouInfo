<header class="bg-custom-blue text-white p-4">
    <div class="container mx-auto flex justify-center items-center md:justify-between">
        <a href="{{ route('index') }}" class="text-3xl font-bold">
            MiaouInfo😽
        </a>
        <nav class="hidden md:block">
            <a href="{{ route('index') }}" class="mx-2 hover:text-gray-300">Accueil</a>
            <a href="{{ route('faits.index') }}" class="mx-2 hover:text-gray-300">Tous les faits</a>
            <a href="{{ route('faits.create') }}" class="mx-2 hover:text-gray-300">Ajouter un fait</a>
        </nav>
    </div>
</header>
