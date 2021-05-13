<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Bonus;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('test', function () {
    return auth()->user()->bonus->getAvailableBonuses();
//    $bonus = json_decode(Bonus::where('amount', '!=', 0)->orWhere('amount', null)->get('id'));
//    return array_column($bonus, 'id');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('login/facebook', [LoginController::class, 'redirectToProvider']);
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderCallback']);

Route::put('/user/addBonus/{user}', [UserController::class, 'addBonus']);
