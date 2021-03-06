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
        //Payment list
        Permission::create(['name' => 'payments.index']);
        Permission::create(['name' => 'payments.store']);
        Permission::create(['name' => 'payments.update']);
        Permission::create(['name' => 'payments.destroy']);
        //Debt list
        Permission::create(['name' => 'debts.index']);
        Permission::create(['name' => 'debts.store']);
        Permission::create(['name' => 'debts.update']);
        Permission::create(['name' => 'debts.destroy']);
        //Sale list
        Permission::create(['name' => 'sales.index']);
        Permission::create(['name' => 'sales.store']);
        Permission::create(['name' => 'sales.update']);
        Permission::create(['name' => 'sales.destroy']);
        //mub list
        Permission::create(['name' => 'mubs.index']);
        Permission::create(['name' => 'mubs.store']);
        Permission::create(['name' => 'mubs.update']);
        Permission::create(['name' => 'mubs.destroy']);
        //cmub list
        Permission::create(['name' => 'cmubs.index']);
        Permission::create(['name' => 'cmubs.store']);
        Permission::create(['name' => 'cmubs.update']);
        Permission::create(['name' => 'cmubs.destroy']);
        //Gmv list
        Permission::create(['name' => 'gmvs.index']);
        Permission::create(['name' => 'gmvs.store']);
        Permission::create(['name' => 'gmvs.update']);
        Permission::create(['name' => 'gmvs.destroy']);
        //Ppsif list
        Permission::create(['name' => 'ppsifs.index']);
        Permission::create(['name' => 'ppsifs.store']);
        Permission::create(['name' => 'ppsifs.update']);
        Permission::create(['name' => 'ppsifs.destroy']);
        //Gfof list
        Permission::create(['name' => 'gfos.index']);
        Permission::create(['name' => 'gfos.store']);
        Permission::create(['name' => 'gfos.update']);
        Permission::create(['name' => 'gfos.destroy']);
        //Gff list
        Permission::create(['name' => 'gfs.index']);
        Permission::create(['name' => 'gfs.store']);
        Permission::create(['name' => 'gfs.update']);
        Permission::create(['name' => 'gfs.destroy']);
        //cdg list
        Permission::create(['name' => 'cdgs.index']);
        Permission::create(['name' => 'cdgs.store']);
        Permission::create(['name' => 'cdgs.update']);
        Permission::create(['name' => 'cdgs.destroy']);
        //Oi list
        Permission::create(['name' => 'ois.index']);
        Permission::create(['name' => 'ois.store']);
        Permission::create(['name' => 'ois.update']);
        Permission::create(['name' => 'ois.destroy']);
        //Oi list
        Permission::create(['name' => 'acns.index']);
        Permission::create(['name' => 'acns.store']);
        Permission::create(['name' => 'acns.update']);
        Permission::create(['name' => 'acns.destroy']);
        //acns list
        Permission::create(['name' => 'afns.index']);
        Permission::create(['name' => 'afns.store']);
        Permission::create(['name' => 'afns.update']);
        Permission::create(['name' => 'afns.destroy']);
        //oans list
        Permission::create(['name' => 'oans.index']);
        Permission::create(['name' => 'oans.store']);
        Permission::create(['name' => 'oans.update']);
        Permission::create(['name' => 'oans.destroy']);
        //afs list
        Permission::create(['name' => 'afs.index']);
        Permission::create(['name' => 'afs.store']);
        Permission::create(['name' => 'afs.update']);
        Permission::create(['name' => 'afs.destroy']);
        //oafs list
        Permission::create(['name' => 'oafs.index']);
        Permission::create(['name' => 'oafs.store']);
        Permission::create(['name' => 'oafs.update']);
        Permission::create(['name' => 'oafs.destroy']);
        //cbal list
        Permission::create(['name' => 'cbals.index']);
        Permission::create(['name' => 'cbals.store']);
        Permission::create(['name' => 'cbals.update']);
        Permission::create(['name' => 'cbals.destroy']);
        //ddg list
        Permission::create(['name' => 'ddgs.index']);
        Permission::create(['name' => 'ddgs.store']);
        Permission::create(['name' => 'ddgs.update']);
        Permission::create(['name' => 'ddgs.destroy']);
        //garante list
        Permission::create(['name' => 'members.index']);
        Permission::create(['name' => 'members.store']);
        Permission::create(['name' => 'members.update']);
        Permission::create(['name' => 'members.destroy']);
        //justification list
        Permission::create(['name' => 'justifications.index']);
        Permission::create(['name' => 'justifications.store']);
        Permission::create(['name' => 'justifications.update']);
        Permission::create(['name' => 'justifications.destroy']);
        //crna list
        Permission::create(['name' => 'crnas.index']);
        Permission::create(['name' => 'crnas.store']);
        Permission::create(['name' => 'crnas.update']);
        Permission::create(['name' => 'crnas.destroy']);
        //dge list
        Permission::create(['name' => 'dges.index']);
        Permission::create(['name' => 'dges.store']);
        Permission::create(['name' => 'dges.update']);
        Permission::create(['name' => 'dges.destroy']);
        //ico list
        Permission::create(['name' => 'icos.index']);
        Permission::create(['name' => 'icos.store']);
        Permission::create(['name' => 'icos.update']);
        Permission::create(['name' => 'icos.destroy']);
        //gco list
        Permission::create(['name' => 'gcos.index']);
        Permission::create(['name' => 'gcos.store']);
        Permission::create(['name' => 'gcos.update']);
        Permission::create(['name' => 'gcos.destroy']);
        
        //Assign list*
        Permission::create(['name' => 'assigns.index']);
        Permission::create(['name' => 'assigns.store']);
        Permission::create(['name' => 'assigns.update']);
        Permission::create(['name' => 'assigns.destroy']);
        //Observed list*
        Permission::create(['name' => 'observeds.index']);
        Permission::create(['name' => 'observeds.store']);
        Permission::create(['name' => 'observeds.update']);
        Permission::create(['name' => 'observeds.destroy']);
        //Approved list*
        Permission::create(['name' => 'approveds.index']);
        Permission::create(['name' => 'approveds.store']);
        Permission::create(['name' => 'approveds.update']);
        Permission::create(['name' => 'approveds.destroy']);
        //Rejected list*
        Permission::create(['name' => 'rejecteds.index']);
        Permission::create(['name' => 'rejecteds.store']);
        Permission::create(['name' => 'rejecteds.update']);
        Permission::create(['name' => 'rejecteds.destroy']);
        //Disbursement list*
        Permission::create(['name' => 'disbursements.index']);
        Permission::create(['name' => 'disbursements.store']);
        Permission::create(['name' => 'disbursements.update']);
        Permission::create(['name' => 'disbursements.destroy']);

        // User Permission
        // Folder
        Permission::create(['name' => 'usrfolders.index']);
    }
}
