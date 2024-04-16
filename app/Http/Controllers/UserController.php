<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('pags.cadastro');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $dados= $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|unique:users|size:11',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        var_dump($dados);
        User::create($dados);
        // Salvar o usuário no banco de dados
    

        // Redirecionar o usuário para alguma página após o cadastro
        return redirect()->route('home'); 
    }
}
