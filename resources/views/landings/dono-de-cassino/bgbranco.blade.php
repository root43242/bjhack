<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hackeando Casas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans antialiased bg-white">
    <!-- Título Centralizado e Responsivo -->
    <div class="flex justify-center p-4 w-full text-center text-black">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold w-full sm:w-3/4 md:w-1/2">
            UM DONO DE CASSINO <span class="text-red-500">VAZOU UMA FALHA</span> QUE MOSTRA UM JOGO QUE OS CASSINOS <span class="text-yellow-400">NÃO CONSEGUEM MANIPULAR</span>
        </h1>
    </div>

    <!-- Vídeo Responsivo -->
    <div class="w-full flex justify-center p-4">
        <div class="w-full sm:w-5/6 md:w-2/3">
            <div class="pb-9/16 overflow-hidden rounded-lg shadow-lg">
                <iframe class="w-full" style="height: 500px;" src="https://www.youtube.com/embed/MSjxSPzjHpU" title="PROJETO R$500.000 NO BLACKJACK! - (EP.62)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</body>
</html>
