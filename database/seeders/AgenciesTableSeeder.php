<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agency;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name'       => 'Nacional',
            'codigo'       => 'CN',
            'city_id'      => '1',
            'autonomy'      => 0
        ]);
        Agency::create([
            'name'       => 'Cala Cala',
            'codigo'       => 'C00',
            'city_id'      => '1',
            'autonomy'      => 6000
        ]);
        Agency::create([
            'name'       => 'El Paso',
            'codigo'       => 'C01',
            'city_id'      => '1',
            'autonomy'      => 6000
        ]);
        Agency::create([
            'name'       => 'Punata',
            'codigo'       => 'C02',
            'city_id'      => '1',
            'autonomy'      => 6000
        ]);
        Agency::create([
            'name'       => 'Casco Viejo',
            'codigo'       => 'G00',
            'city_id'      => '2',
            'autonomy'      => 5000
        ]);
        Agency::create([
            'name'       => 'Rio Seco',
            'codigo'       => 'B00',
            'city_id'      => '3',
            'autonomy'      => 6000
        ]);
    }
}
