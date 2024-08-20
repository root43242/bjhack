<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 to-black">
        <div class="max-w-lg p-8 bg-gray-800 rounded-lg shadow-2xl text-center transform transition-transform duration-500">
            <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-400 mb-6">
                Resultado do Blackjack
            </h1>

            <div class="text-lg text-gray-300 mb-10 leading-relaxed">
                @if($result === 'P')
                    <div class="p-6 border border-red-600 rounded-lg bg-red-900 text-white flex items-center justify-center space-x-4">
                        <i class="fas fa-hand-paper text-3xl"></i>
                        <span class="text-2xl font-semibold">Parar</span>
                    </div>
                @elseif($result === 'C')
                    <div class="p-6 border border-green-500 rounded-lg bg-green-900 text-white flex items-center justify-center space-x-4">
                        <i class="fas fa-hand-rock text-3xl"></i>
                        <span class="text-2xl font-semibold">Pedir Carta</span>
                    </div>
                @elseif($result === 'D')
                    <div class="p-6 border border-yellow-600 rounded-lg bg-yellow-900 text-white flex items-center justify-center space-x-4">
                        <i class="fas fa-hand-point-up text-3xl"></i>
                        <span class="text-2xl font-semibold">Dobrar</span>
                    </div>
                @elseif($result === 'R')
                    <div class="p-6 border border-blue-600 rounded-lg bg-blue-900 text-white flex items-center justify-center space-x-4">
                        <i class="fas fa-hand-scissors text-3xl"></i>
                        <span class="text-2xl font-semibold">Rachar</span>
                    </div>
                @else
                    <div class="p-6 border border-gray-600 rounded-lg bg-gray-900 text-white">
                        <span class="text-2xl font-semibold">Ação Desconhecida</span>
                    </div>
                @endif
            </div>

            <a href="{{ route('dashboard') }}" 
               class="inline-block px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-red-600 to-black rounded-full shadow-lg transform transition-transform duration-300 hover:scale-110 hover:bg-gradient-to-l hover:from-black hover:to-red-600 focus:outline-none focus:ring-4 focus:ring-red-800">
                Voltar
            </a>
        </div>
    </div>
</x-app-layout>
