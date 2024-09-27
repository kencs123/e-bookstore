<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BooksSeeder::class);
        
       $this->call(PublishersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(Book_category_Seeder::class);

    }
}
