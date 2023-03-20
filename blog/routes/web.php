<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\NewArticleController;
use App\Http\Controllers\StoreController;
use GuzzleHttp\Middleware;
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

Route::get('/', [NavigationController::class, 'home'])
->name('home');


// Area dos artigosS
Route::post('/NewArticle', [NewArticleController::class, 'store'])
->name('NewArticle')->middleware('auth');

Route::delete('/deleteArticle/{id}', [NewArticleController::class, 'destroy'])
->name('deleteArticle')->middleware('auth');

Route::put('/editArticle', [NewArticleController::class, 'edit'])->name('editArticle')->middleware('auth');


// Dashboard
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
->group(function () {
Route::get('/dashboard', function () {
        return view('dashboard');   
    })->name('dashboard');
});
