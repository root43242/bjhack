<x-app-layout>
<style>
    .aspect-w-16 {
        aspect-ratio: 16 / 9;
    }

    .aspect-h-9 {
        height: auto;
    }

    @media (max-width: 640px) {
        .aspect-w-16 {
            aspect-ratio: 4 / 3;
        }
    }
</style>
    <div class="max-w-lg mx-auto py-12 px-8 bg-gray-900 rounded-lg shadow-xl mt-12">
    <h2 class="text-4xl font-extrabold text-center mb-10 bg-gradient-to-r from-red-600 to-gray-600 bg-clip-text text-transparent animate-rgb">
        HACKEANDO CASAS
    </h2>

        <form class="space-y-8" method="POST" action="{{ route('blackjack.calculate') }}">
            @csrf
            <!-- Cartas do Jogador -->
            <div id="probabilityContainer" class="mt-8 hidden">
                <h3 class="text-2xl font-semibold text-gray-300 mb-6 text-center">Probabilidade de Vitória</h3>
                <div class="relative w-full h-8 bg-gray-800 rounded-full overflow-hidden shadow-lg">
                    <div id="probabilityBar" class="h-full bg-gradient-to-r from-red-500 to-green-500 rounded-full" style="width: 0%;"></div>
                </div>
                <div class="text-center mt-4">
                    <span id="probabilityText" class="text-white text-lg font-bold">0%</span>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-semibold text-gray-300 mb-6">Cartas do Jogador</h3>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="player-card-1" class="block text-lg font-medium text-gray-400 mb-2">Carta 1:</label>
                        <input type="text" id="player-card-1" name="player_card_1" class="w-full px-4 py-3 border border-transparent rounded-md bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition" placeholder="Ex: 10, Q" required>
                    </div>

                    <div>
                        <label for="player-card-2" class="block text-lg font-medium text-gray-400 mb-2">Carta 2:</label>
                        <input type="text" id="player-card-2" name="player_card_2" class="w-full px-4 py-3 border border-transparent rounded-md bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition" placeholder="Ex: 7, A" required>
                    </div>

                </div>
            </div>

            <!-- Cartas do Dealer -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-300 mb-6 flex items-center">Carta do Dealer</h3>

                <div class="flex justify-center">
                    <div>
                        <label for="dealer-card-1" class="block text-lg font-medium text-gray-400 mb-2">Carta 1:</label>
                        <input type="text" id="dealer-card-1" name="dealer_card" class="w-full px-4 py-3 border border-transparent rounded-md bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition" placeholder="Ex: 9, J" required>
                    </div>
                </div>
            </div>

            <!-- Botão de Enviar -->
            <div class="text-center">
                <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-red-600 to-gray-600 text-white rounded-lg text-lg font-semibold shadow-lg hover:from-red-500 hover:to-gray-600 focus:outline-none focus:ring-4 focus:ring-green-300 transition">
                    Calcular Probabilidade
                </button>
            </div>
        </form>
    </div>

    <div class="w-full flex justify-center p-4">
        <a class="p-4 bg-green-500 text-white font-extrabold text-2xl rounded-lg" target="_blank" href="https://go.aff.apostafeita.bet/8ozyf36s&lang=pt-br">IR PARA A PLATAFORMA</a>
    </div>


    <script>
    document.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', calculateProbability);
});

function calculateProbability() {
    const playerCard1 = document.getElementById('player-card-1').value.toUpperCase();
    const playerCard2 = document.getElementById('player-card-2').value.toUpperCase();
    const dealerCard = document.getElementById('dealer-card-1').value.toUpperCase();

    if (!playerCard1 || !playerCard2 || !dealerCard) {
        return;
    }

    const playerTotal = calculatePlayerTotal(playerCard1, playerCard2);
    const dealerCardIndex = convertDealerCardToIndex(dealerCard);
    const recommendation = getRecommendation(playerTotal, dealerCardIndex);

    const probability = recommendationToProbability(recommendation);
    updateProgressBar(probability);
}

function calculatePlayerTotal(card1, card2) {
    const values = {'2': 2, '3': 3, '4': 4, '5': 5, '6': 6, '7': 7, '8': 8, '9': 9, '10': 10, 'J': 10, 'Q': 10, 'K': 10, 'A': 11};
    return (values[card1] || 0) + (values[card2] || 0);
}

function convertDealerCardToIndex(card) {
    const cards = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
    return cards.indexOf(card);
}

function getRecommendation(playerTotal, dealerCardIndex) {
    const recommendations = {
        '17+': ['P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'],
        '16': ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '15': ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '14': ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '13': ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '12': ['C', 'C', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '11': ['D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'],
        '10': ['D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'C', 'C'],
        '9':  ['C', 'D', 'D', 'D', 'D', 'C', 'C', 'C', 'C', 'C'],
        '8-': ['C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C']
    };

    let key;
    if (playerTotal >= 17) key = '17+';
    else if (playerTotal <= 8) key = '8-';
    else key = playerTotal.toString();

    return recommendations[key][dealerCardIndex] || 'C';
}

function recommendationToProbability(recommendation) {
    switch (recommendation) {
        case 'P':
            return 90;
        case 'C':
            return 50;
        case 'D':
            return 70;
        default:
            return 0;
    }
}

function updateProgressBar(probability) {
    const progressBar = document.getElementById('probabilityBar');
    const probabilityText = document.getElementById('probabilityText');
    const probabilityContainer = document.getElementById('probabilityContainer');

    progressBar.style.width = `${probability}%`;
    probabilityText.textContent = `${probability}%`;

    if (probability > 0) {
        probabilityContainer.classList.remove('hidden');
    }
}
</script>
</x-app-layout>
