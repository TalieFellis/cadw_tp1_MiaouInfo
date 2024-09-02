@props([
    'id',           // L'ID du fait
    'fait',         // Le texte du fait (tronqué)
    'editUrl',      // URL pour la modification
    'deleteUrl'     // URL pour la suppression
])

<div class="flex flex-col justify-between p-6 border border-slate-200 rounded-lg shadow-md">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-custom-black">
        Fait #{{ $id }}
    </h5>

    <p class="mb-3 font-normal text-custom-black">
        {{ $fait }}
    </p>

    <div class="flex flex-col justify-center align-middle sm:flex-row sm:justify-between space-y-3 sm:space-y-0">
        <!-- Bouton de modification -->
        <a href="{{ $editUrl }}" class="transition ease-linear delay-50 border px-6 py-3 rounded-lg text-sm font-medium text-center text-gray-400 hover:text-custom-blue hover:border-custom-blue">
            Modifier
        </a>

        <!-- Bouton de suppression -->
        <form action="{{ $deleteUrl }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce fait ?');" class="w-full sm:w-fit">
            @csrf

            <button type="submit" class="w-full sm:w-fit transition ease-linear delay-50 border px-6 py-3 rounded-lg text-sm font-medium text-center text-gray-400 hover:text-red-500 hover:border-red-500">
                Supprimer
            </button>
        </form>
    </div>

</div>
