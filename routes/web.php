<?php

use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\DealsController;
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

Route::get('/', [ContactController::class, 'index'])->name('/');


Route::get("home", [ContactController::class, 'index'])->name('home');
Route::get("contact/add", [ContactController::class, 'add'])->name('add_contact');
Route::post("contact/create", [ContactController::class, 'create'])->name('save_contact');

Route::get("deals/add", [DealsController::class, 'add'])->name('add_deals');
Route::post("deals/create", [DealsController::class, 'create'])->name('save_deals');
