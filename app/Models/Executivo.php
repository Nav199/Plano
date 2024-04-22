<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executivo extends Model
{
    use HasFactory;
    protected $table = 'executivo';
    protected $fillable = [
        'nomeEmpresa',
        'cnpjCpf',
        'setorAtividade',
        'cep',
        'localidade',
        'bairroDistrito',
        'logradouro',
        'numero',
        'missaoEmpresa',
        'valoresEmpresa',
        'visaoEmpresa',
        'fonteRecursos',
    ];
}
