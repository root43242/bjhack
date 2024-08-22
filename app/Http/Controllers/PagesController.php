<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostumerData;


class PagesController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'terms' => 'required',
        ]);
    
        // Verifica se já existe um registro com o email ou telefone fornecido
        $existingCustomer = CostumerData::where('email', $request->email)
                                        ->orWhere('phone', $request->phone)
                                        ->first();
    
        // Se o registro existir, redireciona para o link
        if ($existingCustomer) {
            return redirect()->away('https://go.perfectpay.com.br/PPU38COUOEU');
        }
    
        // Se não existir, cria o novo registro
        CostumerData::create($request->only('name', 'email', 'phone'));
    
        // Redireciona após a criação do registro
        return redirect()->away('https://go.perfectpay.com.br/PPU38COUOEU');
    }
    
}
