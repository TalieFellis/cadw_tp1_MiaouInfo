<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre ?? "Faits sur les chats" }}</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" type="image/png">
</head>
<body class="bg-custom-pink text-custom-black font-raleway flex flex-col min-h-screen">

    <x-barre-navigation />

    <!-- Contenu principal injecter dans le slot -->
    <main class="container mx-auto px-4 py-24">
        {{ $slot }}
    </main>

    <x-pied-page />
</body>
</html>
