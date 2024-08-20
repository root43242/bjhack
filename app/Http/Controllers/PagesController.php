<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostumerData;


class PagesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'terms' => 'required',
        ]);

        CostumerData::create($request->only('name', 'email', 'phone'));

        return redirect()->back()->with('success', 'Dados enviados com sucesso!');
    }
}
