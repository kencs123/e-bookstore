<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BooksSeeder extends Seeder
{
    public function run()
    {
        DB::table('books') ->insert([
            'Publisher_id' => '1',
            'title' => 'Bleach',
            'author'=>'Tite Kubo',
            'year'=> '1998',
            'synopsis'=> 'Ichigo Kurosaki adalah seorang shinigami,dia berperan untuk menyelamatkan Soul Society dan Dunia Manusia',
            'image'=> 'bleach1.jpg',
        ]);
        DB::table('books') ->insert([
            'Publisher_id' => '2',
            'title' => 'Kimi no Nawa',
            'author'=>'Makoto shinkai ',
            'year'=> '2015',
            'synopsis'=> 'Dua orang manusia yang saling bertukar tubuh.',
            'image'=> 'kiminonawa.jpg',
        ]);
        DB::table('books') ->insert([
            'Publisher_id' => '1',
            'title' => 'Cinta Brontosaurus',
            'author'=>'Raditya Dika',
            'year'=> '2013',
            'synopsis'=> 'Kisah cinta seorang remaja yang diwarnai kegalauan dan ke-absurdan.',
            'image'=> 'komedi.jpg',
        ]);
        DB::table('books') ->insert([
            'Publisher_id' => '2',
            'title' => 'The Hating Game',
            'author'=>'Sally Trone',
            'year'=> '2003',
            'synopsis'=> 'Seorang remaja yang membenci permainan.',
            'image'=> 'sally.jpg',
        ]);
    }
}
