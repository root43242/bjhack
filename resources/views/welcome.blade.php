<!DOCTYPE html>
@php
use Stevebauman\Location\Facades\Location;
$position = Location::get();
$city = $position->cityName;
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <script src="/js/saques.js"></script>
        <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" async defer></script>
        <script>
            window.pixelId = "66c3d28bf2daa99ea0472cef";
            var a = document.createElement("script");
            a.setAttribute("async", "");
            a.setAttribute("defer", "");
            a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
            document.head.appendChild(a);
        </script>
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

    <div id="formModal" class="fixed hidden z-50 bg-gray-800 bg-opacity-90 w-screen h-screen flex justify-center items-center">
    <form class="bg-gray-800 p-8 rounded-lg shadow-lg w-80" method="POST" action="{{ route('redirect.buy') }}">
        @csrf
        <div class="flex flex-col items-center text-center">
            <h2 class="text-2xl font-bold mb-2 text-gray-300 text-center">ESTAMOS QUASE LÁ!</h2>
            <span class="text-sm mb-6 text-gray-400 text-center">Preencha algumas informações para prosseguir com sua compra</span>
        </div>
        <div class="mb-4">
            <label for="name" class="block text-gray-300 font-semibold mb-2">Nome</label>
            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded" placeholder="Seu nome" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-300 font-semibold mb-2">E-mail</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Seu e-mail" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-300 font-semibold mb-2">Telefone</label>
            <input type="tel" id="phone" name="phone" class="w-full p-2 border border-gray-300 rounded" placeholder="Seu telefone" required>
        </div>
        <div class="mb-6">
            <label for="terms" class="inline-flex items-center">
                <input type="checkbox" id="terms" name="terms" class="form-checkbox h-4 w-4 text-blue-600" required>
                <span class="ml-2 text-gray-300">Li e concordo com os <a href="/termos" class="text-gray-400 hover:underline">termos</a></span>
            </label>
        </div>
        <button type="submit" class="w-full buy-button bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition duration-200">Enviar</button>
    </form>
</div>




    <div class="flex justify-center bg-red-600 text-white text-center overflow-hidden">
        <div class="teleprompter">
            <h1 class="p-2 text-md md:text-xl whitespace-nowrap">
                Você e algumas pessoas próximas de <span class="font-extrabold">{{ $city }}</span> foram selecionadas para assistir essa apresentação!
            </h1>
        </div>
    </div>



    <!-- Título Centralizado e Responsivo -->
    <div class="flex justify-center p-6 w-full text-center text-white">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold w-full sm:w-3/4 md:w-1/2 uppercase">
            Dono de Cassino Vaza Falha que Revela Jogo <span class="text-red-500">Impossível de Manipular</span>
        </h1>
    </div>


    <!-- Vídeo Responsivo -->
    <div class="w-full flex justify-center p-4">
        <div class="w-full sm:w-5/6 md:w-2/3">
            <div class="relative pb-2 overflow-hidden rounded-lg shadow-lg">
            <script src="https://cdn.converteai.net/lib/js/smartplayer/v1/sdk.min.js" data-id="66c33fc9bae8aa000bb57e3b"></script> <div id="ifr_66c33fc9bae8aa000bb57e3b_wrapper" style="margin: 0 auto; width: 100%"> <div style="padding:56.25% 0 0 0;position:relative;" id="ifr_66c33fc9bae8aa000bb57e3b_aspect"> <iframe frameborder="0" allowfullscreen src="https://scripts.converteai.net/e5d08590-3ca9-4ac8-bfed-2d90d4cdaa5d/players/66c33fc9bae8aa000bb57e3b/embed.html" id="ifr_66c33fc9bae8aa000bb57e3b" style="position:absolute;top:0;left:0;width:100%;height:100%;" referrerpolicy="origin"></iframe> </div> </div> <style> .elementor-element:has(#ifr_66c33fc9bae8aa000bb57e3b_wrapper) { width: 100%; } </style>    
            </div>    
        </div>
    </div>    






    <div class="flex delayed-content justify-center p-4" style="display: none;">
    <a class="showFormBtn actionbutton p-4 sm:p-6 text-2xl text-purple-600 bg-[#B8F708] font-bold rounded-xl text-center" href="#">QUERO TER ACESSO A ESSA EXTENSÃO</a>
</div>





<div class="flex delayed-content flex-col items-center mt-[220px] sm:mt-[200px] w-full" style="display: none;">
    <div class="text-center w-full sm:w-4/6 flex flex-col p-4 sm:p-0">
        <h1 class="p-2 sm:p-4 bg-white text-red-600 text-xl sm:text-2xl uppercase font-extrabold rounded-xl">Chega de perder dinheiro com jogos manipulados</h1>
        <span class="mt-[10px] sm:mt-[20px] text-sm sm:text-lg text-white">
            Essa extensão estará disponível por tempo limitado para venda. Começamos a divulgá-la em <span class="font-bold">{{ \Carbon\Carbon::yesterday()->format('d/m/Y') }}</span> e acreditamos que ela <span class="font-extrabold">só estará disponivel até HOJE</span>. Se você deseja recuperar os prejuízos que teve com casas de apostas, recomendamos que adquira a extensão o quanto antes.
        </span>

        <h1 class="p-2 sm:p-4 mt-[30px] sm:mt-[50px] bg-gray-500 text-green-400 text-lg sm:text-xl uppercase font-extrabold rounded-xl"><i class="fa-solid fa-down-long mr-4"></i> Pessoas que adquiriram e estão tendo resultados <i class="fa-solid fa-down-long ml-4"></i></h1>

            <div>
                <div id="saquesContainer" class="saques-container w-full p-4 flex flex-col items-center">
                    <div id="userSaques" class="user-saque space-y-3 w-full md:w-3/4 lg:w-1/2">
                    
                    </div>
                </div>
            </div>

        <div class="flex justify-center p-4">
            <a class="showFormBtn actionbutton p-4 sm:p-6 text-2xl text-purple-600 bg-[#B8F708] font-bold rounded-xl text-center" href="#">QUERO TER ACESSO A ESSA EXTENSÃO</a>
        </div>
    </div>
</div>


<!-- FAQ Section -->
<div class="flex delayed-content flex-col justify-center text-center w-full p-8 text-white mt-[100px] items-center bg-gray-800" style="display: none;">
    <h2 class="text-3xl font-extrabold text-[#B8F708] mb-8">Perguntas Frequentes</h2>
    
    <div class="w-3/4 text-left">
        <div class="mb-6">
            <h3 class="text-xl font-bold text-red-500">1. Como a extensão realmente funciona?</h3>
            <p class="text-gray-300 mt-2">A extensão utiliza um algoritmo avançado que analisa padrões em tempo real, identificando falhas nas jogadas que aumentam suas chances de vitória. Tudo isso é feito automaticamente, sem que você precise de conhecimentos técnicos.</p>
        </div>

        <div class="mb-6">
            <h3 class="text-xl font-bold text-red-500">2. Consigo usar no meu celular?</h3>
            <p class="text-gray-300 mt-2">Sim! A extensão funciona em todos os tipos de dispositivos.</p>
        </div>

        <div class="mb-6">
            <h3 class="text-xl font-bold text-red-500">3. Quais são os requisitos mínimos para usar a extensão?</h3>
            <p class="text-gray-300 mt-2">A extensão é compatível com os principais navegadores de internet. Tudo o que você precisa é de um computador ou dispositivo móvel com acesso à internet para começar a usar.</p>
        </div>

        <div class="mb-6">
            <h3 class="text-xl font-bold text-red-500">4. A extensão é legal e segura de usar?</h3>
            <p class="text-gray-300 mt-2">Sim, a extensão é completamente legal e segura. Ela não interfere nos sistemas dos cassinos, mas apenas identifica oportunidades baseadas em estatísticas e padrões de jogo.</p>
        </div>

        <div class="mb-6">
            <h3 class="text-xl font-bold text-red-500">5. Como eu recebo a extensão após a compra?</h3>
            <p class="text-gray-300 mt-2">Após a confirmação do pagamento, você receberá um e-mail com um link para baixar a extensão e instruções detalhadas de instalação.</p>
        </div>
    </div>
</div>

        <div class="flex delayed-content justify-center p-4" style="display: none;">
            <a class="showFormBtn actionbutton p-4 sm:p-6 text-2xl text-purple-600 bg-[#B8F708] font-bold rounded-xl text-center" href="#">QUERO TER ACESSO A ESSA EXTENSÃO</a>
        </div>



        <div class="flex delayed-content flex-col justify-center text-center w-full p-8 text-white mt-[300px] items-center" style="display: none;">
            <span class="w-3/4"><span class="font-bold">Este site não é afiliado ao Facebook ou a qualquer entidade do Facebook.</span>Depois que você sair do Facebook, a responsabilidade não é deles e sim do nosso site. Fazemos todos os esforços para indicar claramente e mostrar todas as provas do produto e usamos resultados reais. Nós não vendemos o seu e-mail ou qualquer informação para terceiros. Jamais fazemos nenhum tipo de spam. Se você tiver alguma dúvida, sinta-se à vontade para usar o link de contato e falar conosco em horário comercial de Segunda a Sextas das 09h00 ás 18h00. Lemos e respondemos todas as mensagens por ordem de chegada.</span>
            <div class="flex mt-4 text-gray-400">
                <a href="/termos" class="p-4">Termos De Uso</a>
                <a href="/politicas" class="p-4">Politicas De Privacidade</a>
            </div>        
        </div>


        <script>
        // Aguarde 1 minuto (60000 ms) antes de mostrar o conteúdo
        setTimeout(function() {
            // Seleciona todo o conteúdo a partir do botão e o torna visível
            const delayedContent = document.querySelectorAll('.delayed-content');
            delayedContent.forEach(element => {
                element.style.display = 'flex'; // Exibe o conteúdo
            });
        }, 60000); // 60000 milissegundos = 1 minuto
    </script>


        <script>
        // Seleciona todos os botões com a classe 'showFormBtn'
        const showFormBtns = document.querySelectorAll('.showFormBtn');
        const formModal = document.getElementById('formModal');

        // Adiciona um evento de clique a cada botão para mostrar o formulário
        showFormBtns.forEach(button => {
            button.addEventListener('click', function() {
                formModal.classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
