@props(['faits'])

<x-layout :titre="'Liste des faits félins | MiaouInfo'">

    <!-- Affichage de la liste des faits -->
    @if ($faits->isEmpty())
        <h2>Aucun fait à afficher</h2>
    @else
        <section class="flex flex-col justify-center p-4 py-12 mb-12 rounded-lg bg-custom-white">
            <h1 class="text-5xl font-extrabold font-dm mx-auto mb-12 lg:w-[600px] text-center">
                Liste des faits
            </h1>

            @if (session('succes'))
                <x-forms.succes message="{{ session('succes') }}" />
            @endif

            <div class="grid gap-4 lg:grid-cols-3">
                @foreach ($faits as $fait)
                    <x-faits.fait-card
                        :id="$fait->id"
                        :fait="$fait->court_fait"
                        :editUrl="route('faits.edit', ['id' => $fait->id])"
                        :deleteUrl="route('faits.destroy', ['id' => $fait->id])"
                    />
                @endforeach
            </div>
        </section>
    @endif

</x-layout>
