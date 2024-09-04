@props(['fait'])

<div class="container mx-auto">

    <h2 class="text-xl mx-auto text-center mt-6">Fait #{{ $fait->id }}</h2>

    <form action="{{ route('faits.update') }}" method="POST" class="max-w-sm mx-auto">
        @csrf

        <input type="hidden" name="id" value="{{ $fait->id }}">

        <div class="mb-12 mt-6">
            <!-- Gestion des erreurs pour le champ 'fait' -->
            <x-forms.erreur champ="fait" />

            <!-- Textarea pour entrer le fait -->
            <textarea
                id="fait"
                name="fait"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-custom-white rounded-lg border border-gray-300 focus:ring-custom-pink focus:border-custom-blue"
                placeholder="Modifiez un fait sur les chats...">{{ old('fait', $fait->fait) }}</textarea>
        </div>

        <div class="text-center">
            <button
                type="submit"
                class="transition ease-linear delay-50 px-6 py-3 bg-custom-blue text-custom-white font-bold rounded-lg hover:shadow-lg hover:shadow-slate-400">
                Modifiez le fait
            </button>
        </div>
    </form>
</div>
