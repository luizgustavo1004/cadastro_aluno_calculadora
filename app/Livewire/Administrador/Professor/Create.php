<?php

namespace App\Livewire\Administrador\Professor;

use App\Models\professor;
use Livewire\Component;

class Create extends Component
{



    public $cpf;
    public $cbo;
    public $codigo_da_escola;
    public $email;
    public $senha;


    public function render()
    {
        return view('livewire.administrador.professor.create');
    }



    public function store()
    {
        professor::create([
            'cpf' => $this->cpf,
            'codigo_da_escola' => $this->codigo_da_escola,
            'email' => $this->email,
            'senha' => $this->senha,
            'cbo' => $this->cbo
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
