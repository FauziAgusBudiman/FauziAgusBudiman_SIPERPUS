<?php

<<<<<<< HEAD
use App\Http\Controllers\BookController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// GET, POST, PUT, PATCH, DELETE -> rest api
// PUT -> update secara keseluruhan
// PATCH -> update salah satu
// buku {judul, penerbit, penulis}

// route: GET /books
Route::get('/books', [BookController::class, 'index'])
    ->name('books.index');
=======
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// route: GET /buku
Route::get('/books', [BookController::class, 'index'] )
->name('books.index');
>>>>>>> 3a9e448 (Penambahan project laravel)

// route: GET /members
Route::get('/members', function () {
    return 'Daftar Member';
});

// route: GET /loans
<<<<<<< HEAD
Route::get('/loans/{id}', function (int $id) {
    return 'Daftar Peminjaman '.$id;
});
// route: GET /returns
Route::get('/returns', function () {
    return 'Daftar Pengembalian';
});

Route::get('/', function () {
    return view('panel');
});

Route::resource('manga', Controller::class);
=======
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



>>>>>>> 3a9e448 (Penambahan project laravel)

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
