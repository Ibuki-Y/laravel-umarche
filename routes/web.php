<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;
use App\Http\Controllers\LifeCycleTestController;

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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

Route::get('/component-1', [ComponentTestController::class, 'showComponent1']);
Route::get('/component-2', [ComponentTestController::class, 'showComponent2']);
Route::get('/service-container', [LifeCycleTestController::class, 'showServiceContainer']);
Route::get('/service-provider', [LifeCycleTestController::class, 'showServiceProvider']);

require __DIR__ . '/auth.php';
