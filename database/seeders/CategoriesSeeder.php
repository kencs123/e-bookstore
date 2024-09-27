<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories') ->insert([
            'name' => 'Comedy',  
        ]);
        DB::table('categories') ->insert([
            'name' => 'Anime',            
        ]);
  
    }
}
