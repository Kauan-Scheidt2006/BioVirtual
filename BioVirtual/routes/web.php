<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CanalController;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\Admin;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix("BioVirtual")->middleware('auth')->group(function (){
    Route::get('/', [CanalController::class, 'index'])->name('biovirtual.index');
    Route::post('/', [CanalController::class, 'index'])->name('biovirtual.index');
    
    Route::post('/mensagemCad', [CanalController::class, 'mensagemCad'])->name('mensagemCad');
    Route::post('/noticiaCad', [CanalController::class, 'noticiaCad'])->name('noticiaCad');

    Route::get('/Usuario/{id?}', [CanalController::class, 'usuarioDetalhes'])->name('usuario.detalhes');
    Route::get('/listarUsuario', [UsuarioController::class, 'listarUsuarios'])->name('listar.usuarios');

    Route::post('admin', [UsuarioController::class, "adminCad"])->name('adminCad');

    Route::get("/canal", [CanalController::class, "canalCreate"])->middleware(Admin::class)->name('canal.create');    
    
    Route::post("/canal", [CanalController::class, "canalStore"])->middleware(Admin::class)->name('canal.store');

});

require __DIR__.'/auth.php';
