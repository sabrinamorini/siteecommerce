<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titre' => 'T-Shirt Goonies',
            'description' => 'T-Shirt du film goonies',
            'prix' => '25',
            'photo' => 'gooni.jpg',
        ]);
    }
}
