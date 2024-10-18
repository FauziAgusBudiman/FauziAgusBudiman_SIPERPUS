<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data['buku'] = [
            ['judul' => 'Buku A', 'penerbit' => 'Penerbit A']
            ['judul' => 'Buku B', 'penerbit' => 'Penerbit B']
            ['judul' => 'Buku C', 'penerbit' => 'Penerbit C']
        ];

        return view('books.index', $data); 
    }
}
