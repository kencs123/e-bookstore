<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PublishersSeeder extends Seeder
{

    public function run()
    {
        DB::table('publishers') ->insert([
            'name' => 'Gramedia',
            'address' => 'Jalan pattimura nomor 12',
            'phone'=>'08137898283',
            'email'=> 'gramedia@gmail.com',
            'image'=> 'gramedia.jpg',
        ]);
        DB::table('publishers') ->insert([
            'name' => 'Kompas',
            'address' => 'Jalan Kemanggisan nomor 21',
            'phone'=>'0813294672821',
            'email'=> 'kompas@gmail.com',
            'image'=> 'kompas.jpg',
        ]);
    }
}
