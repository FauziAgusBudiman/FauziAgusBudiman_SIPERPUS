<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
<<<<<<< HEAD
    
    public function index() {
        $data['buku'] = [
            ['judul' => 'Buku A', 'penerbit' => 'Penerbit B'],
            ['judul' => 'Buku B', 'penerbit' => 'Penerbit A'],
            ['judul' => 'Buku C', 'penerbit' => 'Penerbit C'],
        ];
        return view('books.index', $data);
=======
    public function index(){
        $data['buku'] = [
            ['judul' => 'Buku A', 'penerbit' => 'Penerbit A']
            ['judul' => 'Buku B', 'penerbit' => 'Penerbit B']
            ['judul' => 'Buku C', 'penerbit' => 'Penerbit C']
        ];

        return view('books.index', $data); 
>>>>>>> 3a9e448 (Penambahan project laravel)
    }
}
