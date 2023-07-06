<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/*
|---------------------------namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;-----------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ForumController::class, 'index']);
Route::get('/{id}/view', [ForumController::class, 'view']);
Route::get('/create', [ForumController::class, 'create']);
Route::post('/store', [ForumController::class, 'store']);
Route::get('/{id}/category', [ForumController::class, 'category']);
Route::get('/{id}/edit', [ForumController::class, 'edit']);
Route::post('/update', [ForumController::class, 'update']);
Route::delete('/{id}/delete', [ForumController::class, 'delete']);
Route::post('/reply/store', [ForumController::class, 'replyStore']);



Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}/view', [CategoryController::class, 'view']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::delete('/category/{id}/delete', [CategoryController::class, 'delete']);
Route::put('/category/{id}/update', [CategoryController::class, 'update']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
