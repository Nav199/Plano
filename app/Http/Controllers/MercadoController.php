<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercadoController extends Controller
{
    //
    public function index()
    {
        return view('plano.mercado');
    }

    public function store(Request $request)
    {
        
    }
}
