<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Obrigado - Hackeando Casas</title>
    <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" async defer></script>
        <script>
            window.pixelId = "66c3d28bf2daa99ea0472cef";
            var a = document.createElement("script");
            a.setAttribute("async", "");
            a.setAttribute("defer", "");
            a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
            document.head.appendChild(a);
        </script>
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

    </style>

</head>
<body class="font-sans antialiased bg-black text-white">

    <!-- Título Centralizado e Responsivo -->
    <div class="flex justify-center p-6 w-full text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold uppercase text-[#B8F708]">
            Obrigado pela sua Compra!
        </h1>
    </div>

    <!-- Mensagem de Agradecimento -->
    <div class="w-full flex justify-center p-4">
        <div class="w-full sm:w-3/4 md:w-1/2 bg-gray-800 p-6 rounded-lg shadow-lg">
            <p class="text-lg sm:text-xl text-center mb-4">
                A sua compra foi realizada com sucesso e em breve você receberá um e-mail com todos os detalhes. Estamos ansiosos para que você comece a usar nossa extensão e descubra o potencial incrível que ela pode trazer para suas jogadas.
            </p>
            <p class="text-md sm:text-lg text-center mb-6 text-gray-400">
                Se tiver qualquer dúvida ou precisar de suporte, não hesite em nos contatar. Estamos aqui para ajudar você a alcançar o sucesso que merece.
            </p>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="flex flex-col justify-center text-center w-full p-8 text-white mt-[100px] items-center">
        <span class="w-3/4 text-gray-400"><span class="font-bold">Este site não é afiliado ao Facebook ou a qualquer entidade do Facebook.</span>Depois que você sair do Facebook, a responsabilidade não é deles e sim do nosso site. Fazemos todos os esforços para indicar claramente e mostrar todas as provas do produto e usamos resultados reais. Nós não vendemos o seu e-mail ou qualquer informação para terceiros. Jamais fazemos nenhum tipo de spam. Se você tiver alguma dúvida, sinta-se à vontade para usar o link de contato e falar conosco em horário comercial de Segunda a Sextas das 09h00 às 18h00. Lemos e respondemos todas as mensagens por ordem de chegada.</span>
        <div class="flex mt-4 text-gray-400">
            <a href="/termos" class="p-4">Termos De Uso</a>
            <a href="/politicas" class="p-4">Políticas De Privacidade</a>
        </div>        
    </div>

</body>
</html>
