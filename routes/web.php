<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/{descricao}', function ($descricao){
    return "<h1>Descrição: {$descricao}</h1>";
});

Route::get('/usuarios', function (){
    return "<h1>Listagem de Usuários</h1>";
});

