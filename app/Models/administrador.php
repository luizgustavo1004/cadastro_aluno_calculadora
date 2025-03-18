<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    protected $fillable = [
        'cpf',
        'email',
        'cbo',
        'codigo_da_escola',
        'senha'
    ];
}
