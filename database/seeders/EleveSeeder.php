<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eleve::create([
            "nom"=> "Boukdir",
            "prenom"=>"Younes",
            "id_club"=>1
        ]);
    }
}