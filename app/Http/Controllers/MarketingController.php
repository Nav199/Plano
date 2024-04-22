<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    //
    public function index()
    {
        return view('plano.marketing');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'produto'=>'required|string|max:40',
            'preco' => 'required|numeric|min:0.01|max:9999.99', // Preço deve estar entre 0.01 e 9999.99
            'estrategia' => 'required|string|max:100',
            'comercializacao' =>'required|string|max:100',
            'localizacao' => 'required|string|max:50'
        ]);

        Marketing::create($dados);
        
    }
}
