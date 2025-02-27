<?php

use App\Livewire\Aluno\Create as AlunoCreate;
use App\Livewire\Cadastroaluno\Create;
use Illuminate\Support\Facades\Route;


Route::get('/aluno/create', AlunoCreate::class);