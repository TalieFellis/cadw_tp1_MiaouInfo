@props([
    'id',           // L'ID du fait
    'fait',         // Le texte du fait (tronqué)
    'editUrl',      // URL pour la modification
    'deleteUrl'     // URL pour la suppression
])

<div class="p-6 border border-slate-200 rounded-lg shadow-md">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-custom-black">
        Fait #{{ $id }}
    </h5>

    <p class="mb-3 font-normal text-custom-black">
        {{ $fait }}
    </p>

    <div class="flex justify-between">
        <!-- Bouton de modification -->
        <a href="{{ $editUrl }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-custom-white bg-custom-black rounded-lg hover:shadow-lg">
            Modifier
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>

        <!-- Bouton de suppression -->
        <form action="{{ $deleteUrl }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce fait ?');">
            @csrf

            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-custom-white bg-red-500 rounded-lg hover:shadow-lg">
                Supprimer
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>
        </form>
    </div>

</div>
