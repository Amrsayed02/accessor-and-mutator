<?php 


// use App\User;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user/{id}', function ($id) {
//     $user=User::firstOrFail($id);
//     return $user->first_name;
// }); -->
// use App\User;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/user/{id}', function($id) {

// 	$user = User::findOrFail($id);

// 	return $user->first_name;

// });








// <?php

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
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', [UserController::class, 'index']);
Route::post('/store', [UserController::class, 'store']);