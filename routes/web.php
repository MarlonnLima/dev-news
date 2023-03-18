<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\SiteController;
use App\Models\Noticia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', SiteController::class)->names('site');

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/login', [SiteController::class, 'login'])->name('site.login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout' ])->name('login.logout');
Route::post('/criarusuario', [SiteController::class, 'criarUsuario'])->name('site.criarUsuario');
Route::get('/cadastrar', [SiteController::class, 'cadastrar'])->name('site.cadastrar');
Route::view('/adicionar', 'site.adicionar')->name('site.adicionarNoticia');
Route::post('/addnoticia', [NoticiaController::class, 'create'])->name('noticia.cadastrar');
Route::get('/noticia/{id}', [SiteController::class, 'details'])->name('site.details');

Route::get('/noticia/editar/{id}', [NoticiaController::class, 'paraEditar'])->name('noticia.editarNoticia');
Route::post('/noticia/salvaredicao', [NoticiaController::class, 'edit'])->name('noticia.enviarEdicao');
Route::get('/noticia/atualizar/foto/{id}', [NoticiaController::class, 'atualizarFoto'])->name('noticia.atualizarFoto');
Route::post('noticia/addnovafoto', [NoticiaController::class, 'addNovaFoto'])->name('noticia.addnovafoto');

Route::get('/noticia/delete/{id}' , [NoticiaController::class, 'destroy'])->name('site.deleteNoticia');