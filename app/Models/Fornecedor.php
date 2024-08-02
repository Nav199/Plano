<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedor';

    protected $fillable = [
        'id', 'id_mercado','descricao','nome','preco','pagamento','localizacao'
    ];
    public function mercado()
    {
        return $this->belongsTo(Mercado::class,'id_mercado');
    }
}
