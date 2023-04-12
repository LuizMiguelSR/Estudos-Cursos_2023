<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return 'Olá seja bem vindo ao cursos';
});

Route::get('/sobre-nos', function () {
    return 'Sobre-nos';
});

Route::get('/contato', function () {
    return 'Contato';
});
*/

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobre']);

Route::get('/contato', [ContatoController::class, 'contato']);
// nome, categoria, assunto, mensagem

Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
    function(
        string $nome = 'Desconhecido',
        string $categoria = 'Informação',
        string $assunto = 'Contato',
        string $mensagem = 'mensagem não informada') {
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
    }
);
