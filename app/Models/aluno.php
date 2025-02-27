<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'email',
        'rm',
        'codigo_da_escola',
        'senha'
    ];
}
