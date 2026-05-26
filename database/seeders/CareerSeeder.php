<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Careers;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Careers::create([
            'name' => 'Redes y Comunicaciones'
        ]);
        
        Careers::create([
            'name' => 'Desarrollo de Videojuegos'
        ]);

        Careers::create([
            'name' => 'Desarrollo de Software'
        ]);

        Careers::create([
            'name' => 'Ciberseguridad'
        ]);

        Careers::create([
            'name' => 'Inteligencia Artificial'
        ]);
    }
}
