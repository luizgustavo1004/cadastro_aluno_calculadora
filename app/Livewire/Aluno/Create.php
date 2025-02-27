<?php

namespace App\Livewire\Aluno;

use App\Models\aluno;
use Livewire\Component;

class Create extends Component
{

    public $cpf;
    public $rm;
    public $codigo_da_escola;
    public $email;
    public $senha;
    
 

    
    public function render()
    {
        return view('livewire.aluno.create');
    }




    public function store(){
        aluno::create([
            'cpf' => $this -> cpf,
            'codigo_da_escola' => $this -> codigo_da_escola,
            'email' => $this -> email,
            'senha' => $this -> senha,
            'rm' => $this -> rm
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }

}
