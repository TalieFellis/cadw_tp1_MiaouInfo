<header class="bg-gray-900 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('index') }}" class="text-2xl font-bold">
            MiaouInfo
        </a>
        <nav>
            <a href="{{ route('index') }}" class="mx-2 hover:text-gray-300">Accueil</a>
            <a href="{{ route('faits.index') }}" class="mx-2 hover:text-gray-300">Tous les faits</a>
            <a href="{{ route('faits.create') }}" class="mx-2 hover:text-gray-300">Ajouter un fait</a>
        </nav>
    </div>
</header>
