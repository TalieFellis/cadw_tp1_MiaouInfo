<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre ?? "Faits sur les chats" }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" type="image/png">
</head>
<body class="bg-gray-100 text-gray-900">

    <x-barre-navigation />

    <!-- Contenu principal injecter dans le slot -->
    <main class="container mx-auto px-4 py-6">
        {{ $slot }}
    </main>

    <x-pied-page />
</body>
</html>
