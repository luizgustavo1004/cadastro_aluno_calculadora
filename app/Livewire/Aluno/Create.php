<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $cpf;
    public $rm;
    public $codigo_da_escola;
    public $email;
    public $password;



    public function store()
    {
        $user = User::create([
            'cpf' => $this->cpf,
            'codigo_da_escola' => $this->codigo_da_escola,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'rm' => $this->rm,
            'role' => 'Aluno'
        ]);

        aluno::create([
            'cpf' => $this->cpf,
            'codigo_da_escola' => $this->codigo_da_escola,
            'rm' => $this->rm, 
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }




    public function render()
    {
        return view('livewire.aluno.create');
    }
}
