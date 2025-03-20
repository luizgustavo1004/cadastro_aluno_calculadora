<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $alunoId;
    public $email;
    public $password;

    protected $rules = [
         'email' => 'email',
        'password' => 'required|max:40|min:6'
    ];


    protected $messages = [
        'email.email' => 'formato do email é invalido',
        'password.max' => 'a senha tem um limite de 40 caracteres',
        'password.min' => 'tem que ter pelo menos 6 caracteres'
    ];




    public function mount()
    {

        $this->validate();


        $aluno = Aluno::find(Auth::user()->aluno->id);

        $this->alunoId = $aluno->id;
        $this->email = $aluno->email;
        $this->password = $aluno->password;

          if ($aluno == null) {
            return redirect()->back('login');
        }

    }

    // para retornar para a rota anterior, utilizar return redirect()->back();

    public function salvar()
    {



        $aluno = Aluno::find(Auth::user()->aluno->id);
        $aluno->email = $this->email;
        $aluno->password = $this->password;

        $aluno->save();

        session()->flash('success', 'Tarefa Atualizada');
    }


    public function render()
    {
        return view('livewire.aluno.edit');
    }
}
