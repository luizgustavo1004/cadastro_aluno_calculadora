<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'rm',
        'codigo_da_escola',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
