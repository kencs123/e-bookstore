<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Book_category_Seeder extends Seeder
{

    public function run()
    {
        DB::table('book_category') ->insert([
            'book_id' => 1,  
            'category_id' => 2,  
        ]);
        DB::table('book_category') ->insert([
            'book_id' => 2,
            'category_id'=>2            
        ]);
        DB::table('book_category') ->insert([
            'book_id' => 3,
            'category_id'=>1            
        ]);
        DB::table('book_category') ->insert([
            'book_id' => 4,
            'category_id'=>1            
        ]);
    }
}
