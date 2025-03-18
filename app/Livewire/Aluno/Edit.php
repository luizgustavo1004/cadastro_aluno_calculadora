<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Edit extends Component
{
    public $alunoId;
    public $email;
    public $codigo_da_escola;
    public $senha;

    public function mount($id)
    {
        $aluno = Aluno::find($id);

        if ($aluno == null) {
            return redirect()->back('passar a rota');
        }
        $this->alunoId = $aluno->id;
        $this->email = $aluno->email;
        $this->codigo_da_escola = $aluno->codigo_da_escola;
        $this->senha = $aluno->senha;
       
    }

    // para retornar para a rota anterior, utilizar return redirect()->back();

    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId);
        $aluno->email = $this->email;
        $aluno->codigo_da_escola = $this->codigo_da_escola;
        $aluno->senha = $this->senha;

        $aluno->save();

        session()->flash('success', 'Tarefa Atualizada');
    }


    public function render()
    {
        return view('livewire.aluno.edit');
    }
}
