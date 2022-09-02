<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrimerController;

use App\Http\Controllers\CategoriesController;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\MisionVisionController;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\ContactoController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/mi-primer-controller', [PrimerController::class, 'index']);
Route::get('/mi-primer-controller/{texto?}', [PrimerController::class, 'get']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/index', [WelcomeController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/category={category?}', [CategoryController::class, 'get']);
Route::get('/categories/category={category}/product={product}', [ProductController::class, 'get']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/misionVision', [MisionVisionController::class, 'index']);
Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');
