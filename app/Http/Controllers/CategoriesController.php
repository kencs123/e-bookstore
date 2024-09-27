<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    //
    
    public function detail($id)
    {
        $a = Categories::find($id);
        $b= $a->books;
    	return view('category', compact('a','b'));
    }

}
