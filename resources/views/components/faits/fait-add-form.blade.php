    <div class="container mx-auto">
        <form action="{{ route('faits.store') }}" method="POST" class="max-w-sm mx-auto">
            @csrf

            <div class="my-12">
                <!-- Gestion des erreurs pour le champ 'fait' -->
                <x-forms.erreur champ="fait" />

                <!-- Textarea pour entrer le fait -->
                <textarea
                    id="fait"
                    name="fait"
                    rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-custom-white rounded-lg border border-gray-300 focus:ring-custom-pink focus:border-custom-blue"
                    placeholder="Écrivez un fait sur les chats...">{{ old('fait') }}</textarea>
            </div>

            <div class="text-center">
                <button
                    type="submit"
                    class="transition ease-linear delay-50 px-6 py-3 bg-custom-blue text-custom-white font-bold rounded-lg hover:shadow-lg hover:shadow-slate-400">
                    Ajouter le fait
                </button>
            </div>
        </form>
    </div>
