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
        \App\Models\User::create(
            [
                'nom' => 'T-Shirt Gonnie',
                'prix' => 25,
                'description' => 'T-Shirt du film Gonnie',
                'photo_principale' => 'gooni.jpg',
            ]
        );
    }
}
