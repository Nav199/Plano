<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustoFixo extends Model
{
    use HasFactory;

    protected $table = 'custofixo';

    protected $fillable = [
        'id', 'id_plano','descricao','custo','crescimento','total'
    ];

}
