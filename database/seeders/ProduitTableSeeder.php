<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        magasin::table('produits')->insert([
            'nom' => 'T-Shirt Gonnie',
            'prix_ht' => '25',
            'description' => 'T-Shirt du film gonnies',
            'photo_principale' => 'gooni.jpg',
        ]);
 
    }
}
