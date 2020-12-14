<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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
Route::get('git', [App\Http\Controllers\GitController::class, 'index']);

Route::get('cloudhub', [App\Http\Controllers\GitController::class, 'cloudhub']);

Route::get('test', [App\Http\Controllers\TestController::class, 'getinfo']);

Route::get('price', [App\Http\Controllers\DomainController::class, 'getprice']);

Route::get('/', [PageController::class, 'index']);


Route::get('app/test', [PageController::class, 'index']);



// Products

Route::get('/products-cloud-hosting.html', [PageController::class, 'cloudHosting']);

Route::get('/products-cloud-servers.html',[PageController::class, 'cloudServer']);

Route::get('/products-dedicated-cloud.html',[PageController::class, 'dedicatedCloud']);

Route::get('/products-block-storage.html',[PageController::class, 'blockStorage']);

Route::get('/products-domain-names.html',[PageController::class, 'domainNames']);

Route::get('/terms-of-service.html',[PageController::class, 'terms']);


Route::get('/contact.html',[PageController::class, 'contact']);

Route::get('/features.html',[PageController::class, 'features']);

Route::get('/network.html',[PageController::class, 'network']);


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
