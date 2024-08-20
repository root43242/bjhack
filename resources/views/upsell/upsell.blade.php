<!DOCTYPE html>
@php
use Stevebauman\Location\Facades\Location;
$position = Location::get();
$city = $position->cityName;
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" async defer></script>
        <script>
            window.pixelId = "66c3d28bf2daa99ea0472cef";
            var a = document.createElement("script");
            a.setAttribute("async", "");
            a.setAttribute("defer", "");
            a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
            document.head.appendChild(a);
        </script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HACKEANDO CASAS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        .actionbutton {
            animation: pulse 0.5s infinite ease-in-out;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        /* CSS para o efeito de teleprompter */
        .teleprompter {
            display: inline-block;
            white-space: nowrap;
        }

        @media (max-width: 768px) {
            .teleprompter h1 {
                display: inline-block;
                white-space: nowrap;
                animation: scroll 10s linear infinite;
            }
        }

        /* Animação de teleprompter */
        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        </style>

    </head>
    <body class="font-sans antialiased bg-black">
    <!-- Título Centralizado e Responsivo -->
    <div class="flex flex-col items-center justify-center p-6 w-full text-center text-white relative">
        <h1 class="text-3xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold w-full sm:w-3/4 md:w-1/2 uppercase relative z-30">
            Sua compra <span class="text-red-500">não foi processada</span>
        </h1>
        <span class="p-4 w-full md:w-1/2 text-lg md:text-lg lg:text-xl text-white font-extrabold uppercase relative z-30">
            Assista o vídeo abaixo para finalizar sua compra. não atualize ou feche essa página.
        </span>
        <img class="md:w-1/2 w-full absolute z-20 opacity-20" src="/images/refused.png" alt="">
    </div>



    <!-- Vídeo Responsivo -->
    <div class="w-full flex justify-center p-4">
        <div class="w-full sm:w-5/6 md:w-2/3">
            <div class="relative pb-9/16 overflow-hidden rounded-lg shadow-lg" style="padding-bottom: 56.25%;">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/MSjxSPzjHpU" title="PROJETO R$500.000 NO BLACKJACK! - (EP.62)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="flex justify-center p-4">
        <a class="actionbutton p-4 sm:p-6 text-2xl text-purple-600 bg-[#B8F708] font-bold rounded-xl text-center" href="#">FINALIZAR MINHA COMPRA AGORA</a>
    </div>


</body>
</html>
