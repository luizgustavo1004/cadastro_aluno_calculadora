<?php

use App\Livewire\Administrador\Admin\Create as AdminCreate;
use App\Livewire\Administrador\Professor\Create;
use App\Livewire\Aluno\Create as AlunoCreate;
use App\Livewire\Aluno\Edit;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;


Route::get('/aluno/create', AlunoCreate::class);

Route::get('/', Login::class)->name('login');


Route::get('/aluno', Edit::class)->middleware(['auth', 'role:Aluno'])->name('aluno.dashboard');


Route::get('/professor', function () {
    return 'login professor';
})->middleware(['auth', 'role:professor'])->name('professor.dashboard');

Route::get('/administrador',  Create::class)->middleware(['auth', 'role:admin'])->name('administrador.dashboard');

Route::get('/admin/create', AdminCreate::class)->middleware(['auth', 'role:admin'])->name('admin.create');
