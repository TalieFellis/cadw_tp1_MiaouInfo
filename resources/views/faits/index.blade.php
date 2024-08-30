@props([
'faits'
])

<x-layout :titre="'Liste des faits félins | MiaouInfo'">

    <!-- Affichage de la liste des faits -->
    
    @if($faits->isEmpty())
    <h2>Aucun fait à afficher</h2>
    
    @else
    <section class="py-12 bg-gray-900">
        <h1 class="text-5xl text-gray-100 font-bold mb-8 text-center">Liste des citations</h1>
        <div class="flex flex-wrap justify-center">
            @foreach($faits as $fait)
                <!-- Inclut le composant fait-card -->
                <x-faits.fait-card
                    :id="$fait->id"
                    :fait="$fait->court_fait"
                    :editUrl="route('faits.edit', ['id' => $fait->id])"
                    :deleteUrl="route('faits.destroy', ['id' => $fait->id])" />
            @endforeach
        </div>
    </section>
    @endif
</x-layout>