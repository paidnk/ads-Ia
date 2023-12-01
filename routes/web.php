<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Grupo principal 'dashboard' com middleware 'auth' e 'verified'
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'verified']], function () {
    
    // Rota principal para 'dashboard'
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Subgrupo 'facebook' dentro de 'dashboard'
    Route::group(['prefix' => 'facebook'], function () {
        Route::get('/', function () {
            // Retorna a view do dashboard do Facebook
            return view('facebook.welcome');
        })->name('facebook.welcome');
        // Outras rotas do Facebook podem ser adicionadas aqui
    });

    // Subgrupo 'google' dentro de 'dashboard'
    Route::group(['prefix' => 'google'], function () {
        Route::get('/', function () {
            // Retorna a view do dashboard do Google
            return view('dashboard.google');
        })->name('dashboard.google');

        // Outras rotas do Google podem ser adicionadas aqui
    });

    // Subgrupo 'tiktok' dentro de 'dashboard'
    Route::group(['prefix' => 'tiktok'], function () {
        Route::get('/', function () {
            // Retorna a view do dashboard do TikTok
            return view('dashboard.tiktok');
        })->name('dashboard.tiktok');

        // Outras rotas do TikTok podem ser adicionadas aqui
    });

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
