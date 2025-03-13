<?php

use App\Livewire\Administrador\Dashboard;
use App\Livewire\Administrador\Professor\Create;
use App\Livewire\Aluno\Create as AlunoCreate;
use App\Livewire\Auth\Login;
use App\Models\professor;
use Illuminate\Support\Facades\Route;


Route::get('/aluno/create', AlunoCreate::class);

Route::get('/', Login::class)->name('login');

Route::get('/professor', function(){
    return 'login professor';
})->middleware(['auth', 'role:professor'])->name('professor.dashboard');



Route::get('/aluno', function (){
    return 'login aluno';
})->middleware(['auth', 'role:user'])->name('user.dashboard');


Route::get('/administrador',  Create::class)->middleware(['auth', 'role:admin'])->name('administrador.dashboard');

