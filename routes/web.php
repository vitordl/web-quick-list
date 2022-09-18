<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'Main@index')->name('home');

Route::get('novo', 'Main@create')->name('novo_item');

Route::post('salvar', 'Main@store')->name('salvar_aqui');

Route::get('editar/{id}', 'Main@edit')->name('editar_isso');

Route::post('atualizar/{id}', 'Main@update')->name('atualizar_isso');

Route::get('deletar/{id}', 'Main@destroy')->name('deletar_isso');

Route::get('habilitar', 'Main@show')->name('habilitar_edicao');

Route::get('deletar_todos_view', function(){
    return view('deletar_todos_view');
})->name('deletar_todos_view');

Route::get('deletar_todos', 'Main@deleteAll')->name('deletar_todos');

Route::get('sobre', function(){
    return view('sobre');
})->name('sobre_isso');

