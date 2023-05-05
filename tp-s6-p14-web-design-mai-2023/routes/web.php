<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\FrontOfficeController;
use App\Http\Controllers\UtilisateurController;
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
// Front-Office
Route::get('/', [FrontOfficeController::class, 'index']);
Route::get('/article/{url}', [FrontOfficeController::class, 'getArticle']);

// Back-Office
Route::get('/login', [UtilisateurController::class, 'loginPage'])->name('login');
Route::post('/login', [UtilisateurController::class, 'login']);
Route::get('/logoutRedacteur', [UtilisateurController::class, 'logoutRedacteur']);
Route::get('/logoutRedacteurChef', [UtilisateurController::class, 'logoutRedacteurChef']);
Route::get('/logoutAdmin', [UtilisateurController::class, 'logoutAdmin']);
Route::get('/redacteur', [BackOfficeController::class, 'homeRedacteur'])->name('redacteur');
Route::get('/redacteur-chef', [BackOfficeController::class, 'homeRedacteurEnChef'])->name('redacteur-chef');
Route::get('/administrateur', [BackOfficeController::class, 'homeAdministrateur'])->name('administrateur');
Route::post('/article', [ArticleController::class, 'createArticle']);
Route::get('/redacteur-chef/article/{url}', [BackOfficeController::class, 'rcfindArticleById']);
Route::get('/redacteur-chef/article/put/{url}', [BackOfficeController::class, 'rcfindArticleByIdToUpdatePage']);
Route::put('/article/{id}',[ArticleController::class, 'updateArticle'])->name('article.update');
Route::get('/redacteur-chef/article/validate/{id}',[ArticleController::class, 'validateArticle']);
Route::get('/administrateur/article/{url}', [BackOfficeController::class, 'adminfindArticleById']);
Route::get('/administrateur/article/publish/{id}', [ArticleController::class, 'publishArticle']);

