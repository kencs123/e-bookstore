<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
class PublisherController extends Controller
{
    public function index(){

        $publishers = DB::table('publishers')->get();
        
        return view('publishers',['publishers'=>$publishers]);
    }

    public function detail($id)
    {
   
      $pub = Publisher::find($id); 
      $books = Publisher::find($id)->books; 
        return view('detailpublishers',compact('pub','books')); 
    }
   
}
