<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlackjackController extends Controller
{
    public function calculate(Request $request)
    {
        $playerCard1 = $request->input('player_card_1');
        $playerCard2 = $request->input('player_card_2');
        $dealerCard = $request->input('dealer_card');

        $playerTotal = $this->calculatePlayerTotal($playerCard1, $playerCard2);

        $result = $this->getRecommendation($playerCard1, $playerCard2, $dealerCard);

        return view('result', compact('result'));
    }

    private function calculatePlayerTotal($card1, $card2)
{
    $values = ['2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 10, 'Q' => 10, 'K' => 10, 'A' => 11];
    return $values[$card1] + $values[$card2];
}

private function getRecommendation($playerCard1, $playerCard2, $dealerCard)
{
    // Verifique se as cartas do jogador são iguais, usando as próprias cartas, não o total
    if ($playerCard1 === $playerCard2) {
        return $this->getSplitRecommendation($playerCard1, $dealerCard);
    }

    // Calcule o total das cartas do jogador
    $playerTotal = $this->calculatePlayerTotal($playerCard1, $playerCard2);

    $recommendations = [
        '17+' => ['P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'],
        '16' => ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '15' => ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '14' => ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '13' => ['P', 'P', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '12' => ['C', 'C', 'P', 'P', 'C', 'C', 'C', 'C', 'C', 'C'],
        '11' => ['D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'],
        '10' => ['D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'C', 'C'],
        '9'  => ['C', 'D', 'D', 'D', 'D', 'C', 'C', 'C', 'C', 'C'],
        '8-' => ['C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C']
    ];

    $dealerCardIndex = $this->convertDealerCardToIndex($dealerCard);
    $playerTotalKey = $this->getPlayerTotalKey($playerTotal);

    return $recommendations[$playerTotalKey][$dealerCardIndex] ?? 'C';
}

private function getSplitRecommendation($card, $dealerCard)
{
    $splitRecommendations = [
        '2' => ['R', 'R', 'R', 'R', 'R', 'R', 'C', 'C', 'C', 'C'],
        '3' => ['R', 'R', 'R', 'R', 'R', 'R', 'C', 'C', 'C', 'C'],
        '4' => ['C', 'C', 'C', 'R', 'R', 'C', 'C', 'C', 'C', 'C'],
        '5' => ['D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'C', 'C'],
        '6' => ['R', 'R', 'R', 'R', 'R', 'C', 'C', 'C', 'C', 'C'],
        '7' => ['R', 'R', 'R', 'R', 'R', 'R', 'C', 'C', 'C', 'C'],
        '8' => ['R', 'R', 'R', 'R', 'R', 'R', 'R', 'R', 'R', 'R'],
        '9' => ['R', 'R', 'R', 'R', 'R', 'P', 'R', 'R', 'P', 'P'],
        '10' => ['P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'],
        'A' => ['R', 'R', 'R', 'R', 'R', 'R', 'R', 'R', 'R', 'R']
    ];

    $dealerCardIndex = $this->convertDealerCardToIndex($dealerCard);
    return $splitRecommendations[$card][$dealerCardIndex] ?? 'C';
}

private function convertDealerCardToIndex($dealerCard)
{
    $cards = ['2' => 0, '3' => 1, '4' => 2, '5' => 3, '6' => 4, '7' => 5, '8' => 6, '9' => 7, '10' => 8, 'A' => 9];
    return $cards[$dealerCard] ?? 0;
}

private function getPlayerTotalKey($playerTotal)
{
    if ($playerTotal >= 17) {
        return '17+';
    } elseif ($playerTotal == 16) {
        return '16';
    } elseif ($playerTotal == 15) {
        return '15';
    } elseif ($playerTotal == 14) {
        return '14';
    } elseif ($playerTotal == 13) {
        return '13';
    } elseif ($playerTotal == 12) {
        return '12';
    } elseif ($playerTotal == 11) {
        return '11';
    } elseif ($playerTotal == 10) {
        return '10';
    } elseif ($playerTotal == 9) {
        return '9';
    } else {
        return '8-';
    }
}



}

