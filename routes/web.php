<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// route: GET /buku
Route::get('/books', [BookController::class, 'index'] )
->name('books.index');

// route: GET /members
Route::get('/members', function () {
    return 'Daftar Member';
});

// route: GET /loans
Route::get('/loans', function () {
    return 'Daftar Peminjaman';
});

// route: GET /returns
Route::get('/returns', function () {
    return 'Daftar return';
});

Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
