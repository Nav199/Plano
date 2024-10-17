<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forma extends Model
{
    use HasFactory;

    protected $table = 'formajuridica';

    protected $fillable = [
        'id', 'id_plano','tipo'
    ];
}
