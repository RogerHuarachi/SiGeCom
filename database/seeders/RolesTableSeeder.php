<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $GG = Role::create(['name' => 'Gerencia General']);
		$GG->givePermissionTo([
		]);

		$DEC = Role::create(['name' => 'Comercial']);
		$DEC->givePermissionTo([
		]);

		$OP = Role::create(['name' => 'Operaciones']);
		$OP->givePermissionTo([
        ]);

		$TID = Role::create(['name' => 'TID']);
		$TID->givePermissionTo([
        	'permissions.index',
        	'permissions.store',
        	'permissions.update',
            'permissions.destroy',

        	'roles.index',
        	'roles.store',
        	'roles.update',
            'roles.destroy',

        	'cities.index',
        	'cities.store',
        	'cities.update',
        	'cities.destroy',

        	'agencies.index',
        	'agencies.store',
        	'agencies.update',
        	'agencies.destroy',

            'users.index',
        	'users.store',
        	'users.update',
        	'users.destroy',

            'folders.index',
        	'folders.store',
        	'folders.update',
        	'folders.destroy',

            'clients.index',
        	'clients.store',
        	'clients.update',
        	'clients.destroy',

            'personals.index',
        	'personals.store',
        	'personals.update',
        	'personals.destroy',

            'commercials.index',
        	'commercials.store',
        	'commercials.update',
        	'commercials.destroy',

            'caedecs.index',
        	'caedecs.store',
        	'caedecs.update',
        	'caedecs.destroy',

            'businesses.index',
        	'businesses.store',
        	'businesses.update',
        	'businesses.destroy',

            'loans.index',
        	'loans.store',
        	'loans.update',
        	'loans.destroy',

            'assets.index',
        	'assets.store',
        	'assets.update',
        	'assets.destroy',

            'passives.index',
        	'passives.store',
        	'passives.update',
        	'passives.destroy',

            'residences.index',
        	'residences.store',
        	'residences.update',
        	'residences.destroy',

            'jobs.index',
        	'jobs.store',
        	'jobs.update',
        	'jobs.destroy',

            'works.index',
        	'works.store',
        	'works.update',
        	'works.destroy',

            'families.index',
        	'families.store',
        	'families.update',
        	'families.destroy',

            'products.index',
        	'products.store',
        	'products.update',
        	'products.destroy',

            'items.index',
        	'items.store',
        	'items.update',
        	'items.destroy',

            'inventories.index',
        	'inventories.store',
        	'inventories.update',
        	'inventories.destroy',

            'documents.index',
        	'documents.store',
        	'documents.update',
        	'documents.destroy',

            'children.index',
        	'children.store',
        	'children.update',
        	'children.destroy',

            'payments.index',
        	'payments.store',
        	'payments.update',
        	'payments.destroy',

            'debts.index',
        	'debts.store',
        	'debts.update',
        	'debts.destroy',

            'sales.index',
        	'sales.store',
        	'sales.update',
        	'sales.destroy',
        ]);

		$EN = Role::create(['name' => 'Encargado Nacional']);
		$EN->givePermissionTo([
		]);

		$EA = Role::create(['name' => 'Encargado Agencia']);
		$EA->givePermissionTo([
		]);

		$AS = Role::create(['name' => 'Asesor']);
		$AS->givePermissionTo([
		]);

		$PAS = Role::create(['name' => 'Pasante']);
		$PAS->givePermissionTo([
		]);
    }
}
