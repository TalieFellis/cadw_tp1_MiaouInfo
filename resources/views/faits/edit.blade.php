<x-layout :titre="'Modifier le fait sur les félins | MiaouInfo'">

    <section class="h-[70vh] flex flex-col justify-center p-4 rounded-lg bg-custom-white">
        <h1 class="text-5xl font-extrabold font-dm mx-auto lg:w-[600px] text-center">Modifiez un fait</h1>

        <div class="flex flex-wrap justify-center">
            <!-- Inclut le composant fait-form -->
                <x-faits.fait-edit-form :fait=$fait/>
        </div>
    </section>

</x-layout>

