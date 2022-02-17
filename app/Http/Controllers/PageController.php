<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Genre;


class PageController extends Controller
{
    public function index()
    {
        // $books = Book::orderBy('title', 'asc')->get();
        // // dd($books);

        // $book = Book::where('title', 'Dolor Sit');
        // $booksByPrice = Book::where('price', '>=', 15)->orderBy('price', 'desc')->get();
        // // dd($booksByPrice);


        // $book = Book::find(2);
        // dd($book);


        // $genre = Genre::all();

        $books = Book::all();
        $data = ['books' => $books];
        return view('home', $data);
    }

    public function contatti()
    {
        return view('contacts');
    }
}
