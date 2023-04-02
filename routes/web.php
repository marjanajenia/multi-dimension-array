<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MultiRowController;

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
// Route::get('/', function () {
//     return view('product.create');
// });

Route::get('/create', [MultiRowController::class, 'create'])->name('create');
Route::post('/store', [MultiRowController::class, 'store'])->name('store');
