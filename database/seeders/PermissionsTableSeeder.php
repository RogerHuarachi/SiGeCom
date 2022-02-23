<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list
        Permission::create(['name' => 'permissions.index']);
        Permission::create(['name' => 'permissions.store']);
        Permission::create(['name' => 'permissions.update']);
        Permission::create(['name' => 'permissions.destroy']);
        //Role list
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.store']);
        Permission::create(['name' => 'roles.update']);
        Permission::create(['name' => 'roles.destroy']);
        //City list
        Permission::create(['name' => 'cities.index']);
        Permission::create(['name' => 'cities.store']);
        Permission::create(['name' => 'cities.update']);
        Permission::create(['name' => 'cities.destroy']);
        //Agency list
        Permission::create(['name' => 'agencies.index']);
        Permission::create(['name' => 'agencies.store']);
        Permission::create(['name' => 'agencies.update']);
        Permission::create(['name' => 'agencies.destroy']);
        //User list
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.destroy']);
        Permission::create(['name' => 'users.updateProfile']);
        //Folder list
        Permission::create(['name' => 'folders.index']);
        Permission::create(['name' => 'folders.store']);
        Permission::create(['name' => 'folders.update']);
        Permission::create(['name' => 'folders.destroy']);
        //Client list
        Permission::create(['name' => 'clients.index']);
        Permission::create(['name' => 'clients.store']);
        Permission::create(['name' => 'clients.update']);
        Permission::create(['name' => 'clients.destroy']);
        //Personal list
        Permission::create(['name' => 'personals.index']);
        Permission::create(['name' => 'personals.store']);
        Permission::create(['name' => 'personals.update']);
        Permission::create(['name' => 'personals.destroy']);
        //Commercial list
        Permission::create(['name' => 'commercials.index']);
        Permission::create(['name' => 'commercials.store']);
        Permission::create(['name' => 'commercials.update']);
        Permission::create(['name' => 'commercials.destroy']);
        //caedec list
        Permission::create(['name' => 'caedecs.index']);
        Permission::create(['name' => 'caedecs.store']);
        Permission::create(['name' => 'caedecs.update']);
        Permission::create(['name' => 'caedecs.destroy']);
        //Business list
        Permission::create(['name' => 'businesses.index']);
        Permission::create(['name' => 'businesses.store']);
        Permission::create(['name' => 'businesses.update']);
        Permission::create(['name' => 'businesses.destroy']);
        //Loan list
        Permission::create(['name' => 'loans.index']);
        Permission::create(['name' => 'loans.store']);
        Permission::create(['name' => 'loans.update']);
        Permission::create(['name' => 'loans.destroy']);
        //Asset list
        Permission::create(['name' => 'assets.index']);
        Permission::create(['name' => 'assets.store']);
        Permission::create(['name' => 'assets.update']);
        Permission::create(['name' => 'assets.destroy']);
        //Passive list
        Permission::create(['name' => 'passives.index']);
        Permission::create(['name' => 'passives.store']);
        Permission::create(['name' => 'passives.update']);
        Permission::create(['name' => 'passives.destroy']);
        //Residence list
        Permission::create(['name' => 'residences.index']);
        Permission::create(['name' => 'residences.store']);
        Permission::create(['name' => 'residences.update']);
        Permission::create(['name' => 'residences.destroy']);
        //Job list
        Permission::create(['name' => 'jobs.index']);
        Permission::create(['name' => 'jobs.store']);
        Permission::create(['name' => 'jobs.update']);
        Permission::create(['name' => 'jobs.destroy']);
        //Work list
        Permission::create(['name' => 'works.index']);
        Permission::create(['name' => 'works.store']);
        Permission::create(['name' => 'works.update']);
        Permission::create(['name' => 'works.destroy']);
        //Family list
        Permission::create(['name' => 'families.index']);
        Permission::create(['name' => 'families.store']);
        Permission::create(['name' => 'families.update']);
        Permission::create(['name' => 'families.destroy']);
        //Product list
        Permission::create(['name' => 'products.index']);
        Permission::create(['name' => 'products.store']);
        Permission::create(['name' => 'products.update']);
        Permission::create(['name' => 'products.destroy']);
        //Items list
        Permission::create(['name' => 'items.index']);
        Permission::create(['name' => 'items.store']);
        Permission::create(['name' => 'items.update']);
        Permission::create(['name' => 'items.destroy']);
        //Inventories list
        Permission::create(['name' => 'inventories.index']);
        Permission::create(['name' => 'inventories.store']);
        Permission::create(['name' => 'inventories.update']);
        Permission::create(['name' => 'inventories.destroy']);
        //Document list
        Permission::create(['name' => 'documents.index']);
        Permission::create(['name' => 'documents.store']);
        Permission::create(['name' => 'documents.update']);
        Permission::create(['name' => 'documents.destroy']);
        //Child list
        Permission::create(['name' => 'children.index']);
        Permission::create(['name' => 'children.store']);
        Permission::create(['name' => 'children.update']);
        Permission::create(['name' => 'children.destroy']);
    }
}
