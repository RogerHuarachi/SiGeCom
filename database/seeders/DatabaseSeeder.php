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
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(AgenciesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CaedecsTableSeeder::class);
    }
}
