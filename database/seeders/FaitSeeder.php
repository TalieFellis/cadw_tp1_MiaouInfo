<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class FaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $json = File::get("database/data/cat-facts.json");
        $data = json_decode($json, true); // Décodage en tableau associatif

        // Accéder à la clé 'data' qui contient le tableau des faits
        foreach ($data['data'] as $obj) {
            \App\Models\Fait::create([
                'fait' => $obj['fact']
            ]);
        }
    }
}
