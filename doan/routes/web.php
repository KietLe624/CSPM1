<?php

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
    return view('page.home');
});
Route::get('/home', function () {
    return view('page.home');
});
// Route::get('/exercises', function () {
//     return view('page.exercises');
// });

use App\Http\Controllers\ExerciesController;
Route::get('/', [ExerciesController::class, 'index'])->name('page.exercises');
Route::get('/exercises', [ExerciesController::class, 'index'])->name('page.exercises');

Route::get('/short_story', [ExerciesController::class, 'short_story'])->name('page.short_story');

// Trang quản lý Audios
use App\Http\Controllers\AdminAudioController;

// Trang quản lý Audios
Route::prefix('admin')->group(function () {
    Route::resource('audios', AdminAudioController::class);
});
