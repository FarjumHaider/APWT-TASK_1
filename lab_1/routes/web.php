<?php
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

Route::get('/', [pageController::class,'pageHome'])->name('home');
Route::get('/producu/service', [pageController::class,'pageService'])->name('service');
Route::get('/contact', [pageController::class,'pageContact'])->name('contact');
Route::get('/ourTeam', [pageController::class,'pageTeams'])->name('team');
Route::get('/about', [pageController::class,'pageAbout'])->name('about');
