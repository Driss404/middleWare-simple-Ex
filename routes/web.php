<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

/*
Route::get('/laravel', [UserController::class, 'showLaravel']);

Route::get('/client', function(){
    return 'Je suis middleWare Clients';
})->middleWare('clients');

Route::get('/groupMiddle', function() {
    return view('connet');
})->middleware('connexion');
*/

Route::get('/user', function() {
    return '<h1>Nothing yet</h1> ';
})->middleWare('user')


?>
