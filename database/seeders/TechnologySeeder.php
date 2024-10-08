<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies =[ 
            'Wearable Fitness Tracker',
            'GPS per attività sportive',
            'Sensori di movimento',
            'Sistemi di analisi video',
            'Smart Shoes',
            'Racchette intelligenti',
            'Sensori biometrici',
            'Tapis roulant intelligente',
            'VR per l\'allenamento sportivo',];

        foreach($technologies as $technology){
            $new_technology = new Technology();
            $new_technology->name = $technology;
            $new_technology->save();
        }
    }
}
