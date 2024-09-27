<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    
    public function index()
   {
        
    $books = DB::table('books')->get();

    return view('index',['books'=>$books]);
    
    }

    public function detail($id)
    {
     
      $book = Books::find($id);
        return view('detail',compact('book'));
    }

    

}
