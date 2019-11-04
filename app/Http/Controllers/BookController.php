<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function getBooks(){
        $books = Book::all();
        foreach ($books as $key => $book){
            print($book);
        }
    }

    public function addBook(Request $request){
        $book = new Book;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->save();
    }
}
