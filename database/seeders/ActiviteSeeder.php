<?php

namespace Database\Seeders;

use App\Models\Activite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activite::create([
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, pariatur",
            "date_debut"=>2024-04-22,
            "nb_jours"=>100
        ]);
    }
}
