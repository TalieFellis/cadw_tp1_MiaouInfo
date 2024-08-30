<x-layout :titre="'Ajout d\'un fait sur les félins | Chatterie'">
    
    <section class="py-12 bg-gray-900">
        <h1 class="text-5xl text-gray-100 font-bold mb-8 text-center">Ajoutez un fait</h1>
        <div class="flex flex-wrap justify-center">
            <!-- Inclut le composant fait-form -->
                <x-faits.fait-add-form/>
        </div>
    </section>
    
</x-layout>