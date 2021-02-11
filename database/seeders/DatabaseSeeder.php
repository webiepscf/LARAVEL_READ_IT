<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use \App\Models\Produit;
use \App\Models\Type;
use \App\Models\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Type::factory()->count(10)
        //                ->hasProduits(5)
        //                ->create();
        //
        // Client::factory()->count(20)
        //                  ->hasProduits(5)
        //                  ->create();
       // Produit::factory()->count(20)
        //      ->hasClients(5)
//                  ->create();

        Type::factory()->count(10)
                       ->has(Produit::factory()->count(5)
                                                ->has(Client::factory()->count(2)))
                       ->create();
    }
}
