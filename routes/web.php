<?php

use App\Http\Controllers\SiteController;
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

Route::get('/cadastrar', [SiteController::class, 'cadastrar'])->name('site.cadastrar');

Route::get('/noticia/{id}', [SiteController::class, 'details'])->name('site.details');