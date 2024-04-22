<?php

namespace App\Http\Controllers;

use App\Models\Executivo;
use Illuminate\Http\Request;

class ExecutivoController extends Controller
{
    //
    public function index()
    {
        return view('plano.executivo');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $dadosValidados = $request->validate([
            'nomeEmpresa' => 'required|string|max:45',
            'cnpjCpf' => 'required|string|unique:executivo|size:14',
            'setorAtividade'=> 'required|string|max:15',
            'cep' => 'required|string|max:9',
            'localidade' => 'required|string|max:5',
            'bairroDistrito'=> 'required|string|max:30',
            'logradouro' => 'required|string|max:30',
            'numero' => 'required|string|max:8',
            'missaoEmpresa' => 'required|string|max:60',
            'valoresEmpresa' => 'required|string|max:60',
            'visaoEmpresa' => 'required|string|max:60',
            'fonteRecursos' => 'required|string|max:60'
        ]);

        // Verificar se todos os campos do formulário estão preenchidos
        $camposPreenchidos = true;
        foreach ($dadosValidados as $dado) {
            if (empty($dado)) {
                $camposPreenchidos = false;
                break;
            }
        }

        if (!$camposPreenchidos) {
            return back()->withInput()->withErrors(['message' => 'Todos os campos do formulário são obrigatórios.']);
        }

        // Criar o Executivo apenas se todos os campos estiverem preenchidos
        Executivo::create($dadosValidados);
        
        return redirect()->route('marketing-index');
    }
}

