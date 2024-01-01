<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ActiviteController;

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

Route::get('/liste_projets', [ProjetController::class,'index'])->name('liste_projets');
Route::get('/create_projet', [ProjetController::class,'create']);
Route::get('/liste_activites', [ActiviteController::class,'index']);
Route::get('/liste_zones', [ZoneController::class,'index']);
Route::post('sauvegarde_projet' , [ProjetController::class , 'sauvegarde']);
Route::get('/projects/create', [ProjetController::class, 'create'])->name('projects.create');
Route::post('/projects.store', [ProjetController::class, 'store'])->name('projects.store');
Route::get('/projects/{project}/edit', [ProjetController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjetController::class, 'update'])->name('projects.update');
Route::get('/projects/{project}/delete', [ProjetController::class, 'delete'])->name('projects.delete');
Route::delete('/projects/{project}', [ProjetController::class, 'destroy'])->name('projects.delete');

