<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name'       => 'Cochabamba',
        ]);
        City::create([
            'name'       => 'Santa Cruz',
        ]);
        City::create([
            'name'       => 'La Paz',
        ]);
    }
}
