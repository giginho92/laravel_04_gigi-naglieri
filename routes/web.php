<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class, 'welcome'])->name('welcome');

Route::get('/contattaci',[PublicController::class, 'contattaci'])->name('contattaci');

Route::post('/contattaci/submit', [PublicController::class, 'contattaci_submit'])->name('contattaci_submit');

Route::get('/reclamo/sorry', [PublicController::class, 'reclamo_sorry'])->name('reclamo_sorry');
