    <div class="container mx-auto py-12">
        <form action="{{ route('faits.store') }}" method="POST" class="max-w-sm mx-auto">
            @csrf

            <!-- Gestion des erreurs pour le champ 'fait' -->
            <x-forms.erreur champ="fait" />

            <!-- Textarea pour entrer le fait -->
            <div class="mb-4">
                <label for="fait" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Votre fait
                </label>

                <x-forms.erreur champ="texte" />
                <textarea
                    id="fait"
                    name="fait"
                    rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Écrivez un fait sur les chats...">{{ old('fait') }}</textarea>
                @error('fait')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center">
                <button
                    type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Ajouter le fait
                </button>
            </div>
        </form>
    </div>