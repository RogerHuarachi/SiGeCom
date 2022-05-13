<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\AgencyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FolderController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PersonalController;
use App\Http\Controllers\Admin\CommercialController;
use App\Http\Controllers\Admin\CaedecController;
use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\AssetController;
use App\Http\Controllers\Admin\PassiveController;
use App\Http\Controllers\Admin\ResidenceController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\FamilyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\ChildController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\DebtController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\MubController;
use App\Http\Controllers\Admin\CmubController;
use App\Http\Controllers\Admin\GmvController;
use App\Http\Controllers\Admin\PpsifController;
use App\Http\Controllers\Admin\GfoController;
use App\Http\Controllers\Admin\GfController;
use App\Http\Controllers\Admin\CdgController;
use App\Http\Controllers\Admin\OiController;
use App\Http\Controllers\Admin\AcnController;
use App\Http\Controllers\Admin\AfnController;
use App\Http\Controllers\Admin\OanController;
use App\Http\Controllers\Admin\AfController;
use App\Http\Controllers\Admin\OafController;
use App\Http\Controllers\Admin\CbalController;
use App\Http\Controllers\Admin\DdgController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\JustificationController;
use App\Http\Controllers\Admin\CrnaController;
use App\Http\Controllers\Admin\DgeController;
use App\Http\Controllers\Admin\IcoController;
use App\Http\Controllers\Admin\GcoController;
use App\Http\Controllers\Admin\AssignController;
use App\Http\Controllers\Admin\ObservedController;
use App\Http\Controllers\Admin\ApprovedController;
use App\Http\Controllers\Admin\RejectedController;
use App\Http\Controllers\Admin\DisbursementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {

    // Admin
	// Permission
	Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index')
        ->middleware('permission:permissions.index');
    Route::post('permissions/store', [PermissionController::class, 'store'])->name('permissions.store')
        ->middleware('permission:permissions.store');
    Route::put('permissions/{permission}', [PermissionController::class, 'update'])->name('permissions.update')
        ->middleware('permission:permissions.update');
    Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy')
        ->middleware('permission:permissions.destroy');

	// Role
	Route::get('roles', [RoleController::class, 'index'])->name('roles.index')
        ->middleware('permission:roles.index');
    Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store')
        ->middleware('permission:roles.store');
    Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update')
        ->middleware('permission:roles.update');
    Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    // City
    Route::get('cities', [CityController::class, 'index'])->name('cities.index')
        ->middleware('permission:cities.index');
    Route::post('cities/store', [CityController::class, 'store'])->name('cities.store')
        ->middleware('permission:cities.store');
    Route::put('cities/{city}', [CityController::class, 'update'])->name('cities.update')
        ->middleware('permission:cities.update');
    Route::delete('cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy')
        ->middleware('permission:cities.destroy');

    // Agency
    Route::get('agencies', [AgencyController::class, 'index'])->name('agencies.index')
        ->middleware('permission:agencies.index');
    Route::post('agencies/store', [AgencyController::class, 'store'])->name('agencies.store')
        ->middleware('permission:agencies.store');
    Route::put('agencies/{agency}', [AgencyController::class, 'update'])->name('agencies.update')
        ->middleware('permission:agencies.update');
    Route::delete('agencies/{agency}', [AgencyController::class, 'destroy'])->name('agencies.destroy')
        ->middleware('permission:agencies.destroy');

    // User
    Route::get('users', [UserController::class, 'index'])->name('users.index')
        ->middleware('permission:users.index');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store')
        ->middleware('permission:users.store');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update')
        ->middleware('permission:users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy')
        ->middleware('permission:users.destroy');

    // Folder
    Route::get('folders', [FolderController::class, 'index'])->name('folders.index')
        ->middleware('permission:folders.index');
    Route::post('folders/store', [FolderController::class, 'store'])->name('folders.store')
        ->middleware('permission:folders.store');
    Route::put('folders/{folder}', [FolderController::class, 'update'])->name('folders.update')
        ->middleware('permission:folders.update');
    Route::delete('folders/{folder}', [FolderController::class, 'destroy'])->name('folders.destroy')
        ->middleware('permission:folders.destroy');

    // Client
    Route::get('clients', [ClientController::class, 'index'])->name('clients.index')
        ->middleware('permission:clients.index');
    Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create')
        ->middleware('permission:clients.store');
    Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store')
        ->middleware('permission:clients.store');
    Route::get('clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit')
        ->middleware('permission:clients.update');
    Route::put('clients/{client}', [ClientController::class, 'update'])->name('clients.update')
        ->middleware('permission:clients.update');
    Route::delete('clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy')
        ->middleware('permission:clients.destroy');
    Route::get('clients/{client}', [ClientController::class, 'show'])->name('clients.show')
        ->middleware('permission:clients.index');

    // Personal
    Route::get('personals', [PersonalController::class, 'index'])->name('personals.index')
        ->middleware('permission:personals.index');
    Route::post('personals/store', [PersonalController::class, 'store'])->name('personals.store')
        ->middleware('permission:personals.store');
    Route::put('personals/{personal}', [PersonalController::class, 'update'])->name('personals.update')
        ->middleware('permission:personals.update');
    Route::delete('personals/{personal}', [PersonalController::class, 'destroy'])->name('personals.destroy')
        ->middleware('permission:personals.destroy');

    // Comercial
    Route::get('commercials', [CommercialController::class, 'index'])->name('commercials.index')
        ->middleware('permission:commercials.index');
    Route::post('commercials/store', [CommercialController::class, 'store'])->name('commercials.store')
        ->middleware('permission:commercials.store');
    Route::put('commercials/{commercial}', [CommercialController::class, 'update'])->name('commercials.update')
        ->middleware('permission:commercials.update');
    Route::delete('commercials/{commercial}', [CommercialController::class, 'destroy'])->name('commercials.destroy')
        ->middleware('permission:commercials.destroy');

    // Caedec
    Route::get('caedecs', [CaedecController::class, 'index'])->name('caedecs.index')
        ->middleware('permission:caedecs.index');
    Route::post('caedecs/store', [CaedecController::class, 'store'])->name('caedecs.store')
        ->middleware('permission:caedecs.store');
    Route::put('caedecs/{caedec}', [CaedecController::class, 'update'])->name('caedecs.update')
        ->middleware('permission:caedecs.update');
    Route::delete('caedecs/{caedec}', [CaedecController::class, 'destroy'])->name('caedecs.destroy')
        ->middleware('permission:caedecs.destroy');

    // Business
    Route::get('businesses', [BusinessController::class, 'index'])->name('businesses.index')
        ->middleware('permission:businesses.index');
    Route::post('businesses/store', [BusinessController::class, 'store'])->name('businesses.store')
        ->middleware('permission:businesses.store');
    Route::put('businesses/{business}', [BusinessController::class, 'update'])->name('businesses.update')
        ->middleware('permission:businesses.update');
    Route::delete('businesses/{business}', [BusinessController::class, 'destroy'])->name('businesses.destroy')
        ->middleware('permission:businesses.destroy');

    // Loan
    Route::get('loans', [LoanController::class, 'index'])->name('loans.index')
        ->middleware('permission:loans.index');
    Route::post('loans/store', [LoanController::class, 'store'])->name('loans.store')
        ->middleware('permission:loans.store');
    Route::put('loans/{loan}', [LoanController::class, 'update'])->name('loans.update')
        ->middleware('permission:loans.update');
    Route::delete('loans/{loan}', [LoanController::class, 'destroy'])->name('loans.destroy')
        ->middleware('permission:loans.destroy');

    // Residence
    Route::get('residences', [ResidenceController::class, 'index'])->name('residences.index')
        ->middleware('permission:residences.index');
    Route::post('residences/store', [ResidenceController::class, 'store'])->name('residences.store')
        ->middleware('permission:residences.store');
    Route::put('residences/{residence}', [ResidenceController::class, 'update'])->name('residences.update')
        ->middleware('permission:residences.update');
    Route::delete('residences/{residence}', [ResidenceController::class, 'destroy'])->name('residences.destroy')
        ->middleware('permission:residences.destroy');

    // Job
    Route::get('jobs', [JobController::class, 'index'])->name('jobs.index')
        ->middleware('permission:jobs.index');
    Route::post('jobs/store', [JobController::class, 'store'])->name('jobs.store')
        ->middleware('permission:jobs.store');
    Route::put('jobs/{job}', [JobController::class, 'update'])->name('jobs.update')
        ->middleware('permission:jobs.update');
    Route::delete('jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy')
        ->middleware('permission:jobs.destroy');

    // Asset
    Route::get('assets', [AssetController::class, 'index'])->name('assets.index')
        ->middleware('permission:assets.index');
    Route::post('assets/store', [AssetController::class, 'store'])->name('assets.store')
        ->middleware('permission:assets.store');
    Route::put('assets/{asset}', [AssetController::class, 'update'])->name('assets.update')
        ->middleware('permission:assets.update');
    Route::delete('assets/{asset}', [AssetController::class, 'destroy'])->name('assets.destroy')
        ->middleware('permission:assets.destroy');

    // Passives
    Route::get('passives', [PassiveController::class, 'index'])->name('passives.index')
        ->middleware('permission:passives.index');
    Route::post('passives/store', [PassiveController::class, 'store'])->name('passives.store')
        ->middleware('permission:passives.store');
    Route::put('passives/{passive}', [PassiveController::class, 'update'])->name('passives.update')
        ->middleware('permission:passives.update');
    Route::delete('passives/{passive}', [PassiveController::class, 'destroy'])->name('passives.destroy')
        ->middleware('permission:passives.destroy');

    // Work
    Route::get('works', [WorkController::class, 'index'])->name('works.index')
        ->middleware('permission:works.index');
    Route::post('works/store', [WorkController::class, 'store'])->name('works.store')
        ->middleware('permission:works.store');
    Route::put('works/{work}', [WorkController::class, 'update'])->name('works.update')
        ->middleware('permission:works.update');
    Route::delete('works/{work}', [WorkController::class, 'destroy'])->name('works.destroy')
        ->middleware('permission:works.destroy');

    // Family
    Route::get('families', [FamilyController::class, 'index'])->name('families.index')
        ->middleware('permission:families.index');
    Route::post('families/store', [FamilyController::class, 'store'])->name('families.store')
        ->middleware('permission:families.store');
    Route::put('families/{family}', [FamilyController::class, 'update'])->name('families.update')
        ->middleware('permission:families.update');
    Route::delete('families/{family}', [FamilyController::class, 'destroy'])->name('families.destroy')
        ->middleware('permission:families.destroy');

    // Product
    Route::get('products', [ProductController::class, 'index'])->name('products.index')
        ->middleware('permission:products.index');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store')
        ->middleware('permission:products.store');
    Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update')
        ->middleware('permission:products.update');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')
        ->middleware('permission:products.destroy');

    // Product
    Route::get('items', [ItemController::class, 'index'])->name('items.index')
        ->middleware('permission:items.index');
    Route::post('items/store', [ItemController::class, 'store'])->name('items.store')
        ->middleware('permission:items.store');
    Route::put('items/{item}', [ItemController::class, 'update'])->name('items.update')
        ->middleware('permission:items.update');
    Route::delete('items/{item}', [ItemController::class, 'destroy'])->name('items.destroy')
        ->middleware('permission:items.destroy');

    // Inventory
    Route::get('inventories', [InventoryController::class, 'index'])->name('inventories.index')
        ->middleware('permission:inventories.index');
    Route::post('inventories/store', [InventoryController::class, 'store'])->name('inventories.store')
        ->middleware('permission:inventories.store');
    Route::put('inventories/{inventory}', [InventoryController::class, 'update'])->name('inventories.update')
        ->middleware('permission:inventories.update');
    Route::delete('inventories/{inventory}', [InventoryController::class, 'destroy'])->name('inventories.destroy')
        ->middleware('permission:inventories.destroy');

    // Document
    Route::get('documents', [DocumentController::class, 'index'])->name('documents.index')
        ->middleware('permission:documents.index');
    Route::post('documents/store', [DocumentController::class, 'store'])->name('documents.store')
        ->middleware('permission:documents.store');
    Route::put('documents/{document}', [DocumentController::class, 'update'])->name('documents.update')
        ->middleware('permission:documents.update');
    Route::delete('documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy')
        ->middleware('permission:documents.destroy');

    // Child
    Route::get('children', [ChildController::class, 'index'])->name('children.index')
        ->middleware('permission:children.index');
    Route::post('children/store', [ChildController::class, 'store'])->name('children.store')
        ->middleware('permission:children.store');
    Route::put('children/{child}', [ChildController::class, 'update'])->name('children.update')
        ->middleware('permission:children.update');
    Route::delete('children/{child}', [ChildController::class, 'destroy'])->name('children.destroy')
        ->middleware('permission:children.destroy');

    // Payment
    Route::get('payments', [PaymentController::class, 'index'])->name('payments.index')
        ->middleware('permission:payments.index');
    Route::post('payments/store', [PaymentController::class, 'store'])->name('payments.store')
        ->middleware('permission:payments.store');
    Route::put('payments/{payment}', [PaymentController::class, 'update'])->name('payments.update')
        ->middleware('permission:payments.update');
    Route::delete('payments/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy')
        ->middleware('permission:payments.destroy');

    // Debt
    Route::get('debts', [DebtController::class, 'index'])->name('debts.index')
        ->middleware('permission:debts.index');
    Route::post('debts/store', [DebtController::class, 'store'])->name('debts.store')
        ->middleware('permission:debts.store');
    Route::put('debts/{debt}', [DebtController::class, 'update'])->name('debts.update')
        ->middleware('permission:debts.update');
    Route::delete('debts/{debt}', [DebtController::class, 'destroy'])->name('debts.destroy')
        ->middleware('permission:debts.destroy');

    // Sale
    Route::get('sales', [SaleController::class, 'index'])->name('sales.index')
        ->middleware('permission:sales.index');
    Route::post('sales/store', [SaleController::class, 'store'])->name('sales.store')
        ->middleware('permission:sales.store');
    Route::put('sales/{sale}', [SaleController::class, 'update'])->name('sales.update')
        ->middleware('permission:sales.update');
    Route::delete('sales/{sale}', [SaleController::class, 'destroy'])->name('sales.destroy')
        ->middleware('permission:sales.destroy');

    // MUB
    Route::get('mubs', [MubController::class, 'index'])->name('mubs.index')
        ->middleware('permission:mubs.index');
    Route::post('mubs/store', [MubController::class, 'store'])->name('mubs.store')
        ->middleware('permission:mubs.store');
    Route::put('mubs/{mub}', [MubController::class, 'update'])->name('mubs.update')
        ->middleware('permission:mubs.update');
    Route::delete('mubs/{mub}', [MubController::class, 'destroy'])->name('mubs.destroy')
        ->middleware('permission:mubs.destroy');

    // CMUB
    Route::get('cmubs', [CmubController::class, 'index'])->name('cmubs.index')
        ->middleware('permission:cmubs.index');
    Route::post('cmubs/store', [CmubController::class, 'store'])->name('cmubs.store')
        ->middleware('permission:cmubs.store');
    Route::put('cmubs/{cmub}', [CmubController::class, 'update'])->name('cmubs.update')
        ->middleware('permission:cmubs.update');
    Route::delete('cmubs/{cmub}', [CmubController::class, 'destroy'])->name('cmubs.destroy')
        ->middleware('permission:cmubs.destroy');

    // Gmv GASTOS Y MANTENIMIENTO DE VEHICULOS
    Route::get('gmvs', [GmvController::class, 'index'])->name('gmvs.index')
        ->middleware('permission:gmvs.index');
    Route::post('gmvs/store', [GmvController::class, 'store'])->name('gmvs.store')
        ->middleware('permission:gmvs.store');
    Route::put('gmvs/{gmv}', [GmvController::class, 'update'])->name('gmvs.update')
        ->middleware('permission:gmvs.update');
    Route::delete('gmvs/{gmv}', [GmvController::class, 'destroy'])->name('gmvs.destroy')
        ->middleware('permission:gmvs.destroy');

    // Ppsif PERSONAL PERCIBE SALARIO INCLUYE FAMILIAR
    Route::get('ppsifs', [PpsifController::class, 'index'])->name('ppsifs.index')
        ->middleware('permission:ppsifs.index');
    Route::post('ppsifs/store', [PpsifController::class, 'store'])->name('ppsifs.store')
        ->middleware('permission:ppsifs.store');
    Route::put('ppsifs/{ppsif}', [PpsifController::class, 'update'])->name('ppsifs.update')
        ->middleware('permission:ppsifs.update');
    Route::delete('ppsifs/{ppsif}', [PpsifController::class, 'destroy'])->name('ppsifs.destroy')
        ->middleware('permission:ppsifs.destroy');

    // Gfo DETALLE DE GASTOS FIJOS OPERATIVOS
    Route::get('gfos', [GfoController::class, 'index'])->name('gfos.index')
        ->middleware('permission:gfos.index');
    Route::post('gfos/store', [GfoController::class, 'store'])->name('gfos.store')
        ->middleware('permission:gfos.store');
    Route::put('gfos/{gfo}', [GfoController::class, 'update'])->name('gfos.update')
        ->middleware('permission:gfos.update');
    Route::delete('gfos/{gfo}', [GfoController::class, 'destroy'])->name('gfos.destroy')
        ->middleware('permission:gfos.destroy');

    // Gf DETALLE DE GASTOS FAMILIARES
    Route::get('gfs', [GfController::class, 'index'])->name('gfs.index')
        ->middleware('permission:gfs.index');
    Route::post('gfs/store', [GfController::class, 'store'])->name('gfs.store')
        ->middleware('permission:gfs.store');
    Route::put('gfs/{gf}', [GfController::class, 'update'])->name('gfs.update')
        ->middleware('permission:gfs.update');
    Route::delete('gfs/{gf}', [GfController::class, 'destroy'])->name('gfs.destroy')
        ->middleware('permission:gfs.destroy');

    // Cdgs
    Route::get('cdgs', [CdgController::class, 'index'])->name('cdgs.index')
        ->middleware('permission:cdgs.index');
    Route::post('cdgs/store', [CdgController::class, 'store'])->name('cdgs.store')
        ->middleware('permission:cdgs.store');
    Route::put('cdgs/{cdg}', [CdgController::class, 'update'])->name('cdgs.update')
        ->middleware('permission:cdgs.update');
    Route::delete('cdgs/{cdg}', [CdgController::class, 'destroy'])->name('cdgs.destroy')
        ->middleware('permission:cdgs.destroy');

    // Oi OTROS INGRESOS (Seg. Actividad,Sueldos,Rentas y Otros)
    Route::get('ois', [OiController::class, 'index'])->name('ois.index')
        ->middleware('permission:ois.index');
    Route::post('ois/store', [OiController::class, 'store'])->name('ois.store')
        ->middleware('permission:ois.store');
    Route::put('ois/{oi}', [OiController::class, 'update'])->name('ois.update')
        ->middleware('permission:ois.update');
    Route::delete('ois/{oi}', [OiController::class, 'destroy'])->name('ois.destroy')
        ->middleware('permission:ois.destroy');


    // Activos Corrientes del Negocio
    Route::get('acns', [AcnController::class, 'index'])->name('acns.index')
        ->middleware('permission:acns.index');
    Route::post('acns/store', [AcnController::class, 'store'])->name('acns.store')
        ->middleware('permission:acns.store');
    Route::put('acns/{acn}', [AcnController::class, 'update'])->name('acns.update')
        ->middleware('permission:acns.update');
    Route::delete('acns/{acn}', [AcnController::class, 'destroy'])->name('acns.destroy')
        ->middleware('permission:acns.destroy');

    // Activos Fijos del Negocio
    Route::get('afns', [AfnController::class, 'index'])->name('afns.index')
        ->middleware('permission:afns.index');
    Route::post('afns/store', [AfnController::class, 'store'])->name('afns.store')
        ->middleware('permission:afns.store');
    Route::put('afns/{afn}', [AfnController::class, 'update'])->name('afns.update')
        ->middleware('permission:afns.update');
    Route::delete('afns/{afn}', [AfnController::class, 'destroy'])->name('afns.destroy')
        ->middleware('permission:afns.destroy');

    // Otros Activos del Negocio
    Route::get('oans', [OanController::class, 'index'])->name('oans.index')
        ->middleware('permission:oans.index');
    Route::post('oans/store', [OanController::class, 'store'])->name('oans.store')
        ->middleware('permission:oans.store');
    Route::put('oans/{oan}', [OanController::class, 'update'])->name('oans.update')
        ->middleware('permission:oans.update');
    Route::delete('oans/{oan}', [OanController::class, 'destroy'])->name('oans.destroy')
        ->middleware('permission:oans.destroy');

    // Activos de la Familia
    Route::get('afs', [AfController::class, 'index'])->name('afs.index')
        ->middleware('permission:afs.index');
    Route::post('afs/store', [AfController::class, 'store'])->name('afs.store')
        ->middleware('permission:afs.store');
    Route::put('afs/{af}', [AfController::class, 'update'])->name('afs.update')
        ->middleware('permission:afs.update');
    Route::delete('afs/{af}', [AfController::class, 'destroy'])->name('afs.destroy')
        ->middleware('permission:afs.destroy');

    // Otros Activos de la Familia
    Route::get('oafs', [OafController::class, 'index'])->name('oafs.index')
        ->middleware('permission:oafs.index');
    Route::post('oafs/store', [OafController::class, 'store'])->name('oafs.store')
        ->middleware('permission:oafs.store');
    Route::put('oafs/{oaf}', [OafController::class, 'update'])->name('oafs.update')
        ->middleware('permission:oafs.update');
    Route::delete('oafs/{oaf}', [OafController::class, 'destroy'])->name('oafs.destroy')
        ->middleware('permission:oafs.destroy');

    // CBal
    Route::get('cbals', [CbalController::class, 'index'])->name('cbals.index')
        ->middleware('permission:cbals.index');
    Route::post('cbals/store', [CbalController::class, 'store'])->name('cbals.store')
        ->middleware('permission:cbals.store');
    Route::put('cbals/{cbal}', [CbalController::class, 'update'])->name('cbals.update')
        ->middleware('permission:cbals.update');
    Route::delete('cbals/{cbal}', [CbalController::class, 'destroy'])->name('cbals.destroy')
        ->middleware('permission:cbals.destroy');


    // Ddg Detalles de garantia
    Route::get('ddgs', [DdgController::class, 'index'])->name('ddgs.index')
        ->middleware('permission:ddgs.index');
    Route::post('ddgs/store', [DdgController::class, 'store'])->name('ddgs.store')
        ->middleware('permission:ddgs.store');
    Route::put('ddgs/{ddg}', [DdgController::class, 'update'])->name('ddgs.update')
        ->middleware('permission:ddgs.update');
    Route::delete('ddgs/{ddg}', [DdgController::class, 'destroy'])->name('ddgs.destroy')
        ->middleware('permission:ddgs.destroy');


    // Garante Cogarante
    Route::get('members', [MemberController::class, 'index'])->name('members.index')
        ->middleware('permission:members.index');
    Route::post('members/store', [MemberController::class, 'store'])->name('members.store')
        ->middleware('permission:members.store');
    Route::put('members/{member}', [MemberController::class, 'update'])->name('members.update')
        ->middleware('permission:members.update');
    Route::delete('members/{member}', [MemberController::class, 'destroy'])->name('members.destroy')
        ->middleware('permission:members.destroy');


    // Justificacion
    Route::get('justifications', [JustificationController::class, 'index'])->name('justifications.index')
        ->middleware('permission:justifications.index');
    Route::post('justifications/store', [JustificationController::class, 'store'])->name('justifications.store')
        ->middleware('permission:justifications.store');
    Route::put('justifications/{justification}', [JustificationController::class, 'update'])->name('justifications.update')
        ->middleware('permission:justifications.update');
    Route::delete('justifications/{justification}', [JustificationController::class, 'destroy'])->name('justifications.destroy')
        ->middleware('permission:justifications.destroy');


    // Comentario recomendacion nivel de aprobacion
    Route::get('crnas', [CrnaController::class, 'index'])->name('crnas.index')
        ->middleware('permission:crnas.index');
    Route::post('crnas/store', [CrnaController::class, 'store'])->name('crnas.store')
        ->middleware('permission:crnas.store');
    Route::put('crnas/{crna}', [CrnaController::class, 'update'])->name('crnas.update')
        ->middleware('permission:crnas.update');
    Route::delete('crnas/{crna}', [CrnaController::class, 'destroy'])->name('crnas.destroy')
        ->middleware('permission:crnas.destroy');


    // Evaluacion Asalariado
    // Datos generales empresa
    Route::get('dges', [DgeController::class, 'index'])->name('dges.index')
        ->middleware('permission:dges.index');
    Route::post('dges/store', [DgeController::class, 'store'])->name('dges.store')
        ->middleware('permission:dges.store');
    Route::put('dges/{dge}', [DgeController::class, 'update'])->name('dges.update')
        ->middleware('permission:dges.update');
    Route::delete('dges/{dge}', [DgeController::class, 'destroy'])->name('dges.destroy')
        ->middleware('permission:dges.destroy');

    // Ingresos corrientes meses
    Route::get('icos', [IcoController::class, 'index'])->name('icos.index')
        ->middleware('permission:icos.index');
    Route::post('icos/store', [IcoController::class, 'store'])->name('icos.store')
        ->middleware('permission:icos.store');
    Route::put('icos/{ico}', [IcoController::class, 'update'])->name('icos.update')
        ->middleware('permission:icos.update');
    Route::delete('icos/{ico}', [IcoController::class, 'destroy'])->name('icos.destroy')
        ->middleware('permission:icos.destroy');

    // Gastos corrientes meses
    Route::get('gcos', [GcoController::class, 'index'])->name('gcos.index')
        ->middleware('permission:gcos.index');
    Route::post('gcos/store', [GcoController::class, 'store'])->name('gcos.store')
        ->middleware('permission:gcos.store');
    Route::put('gcos/{gco}', [GcoController::class, 'update'])->name('gcos.update')
        ->middleware('permission:gcos.update');
    Route::delete('gcos/{gco}', [GcoController::class, 'destroy'])->name('gcos.destroy')
        ->middleware('permission:gcos.destroy');

        // Assign
    Route::get('assigns', [AssignController::class, 'index'])->name('assigns.index')
        ->middleware('permission:assigns.index');
    Route::post('assigns/store', [AssignController::class, 'store'])->name('assigns.store')
        ->middleware('permission:assigns.store');
    Route::put('assigns/{assign}', [AssignController::class, 'update'])->name('assigns.update')
        ->middleware('permission:assigns.update');
    Route::delete('assigns/{assign}', [AssignController::class, 'destroy'])->name('assigns.destroy')
        ->middleware('permission:assigns.destroy');

    // Observeds
    Route::get('observeds', [ObservedController::class, 'index'])->name('observeds.index')
        ->middleware('permission:observeds.index');
    Route::get('observeds/store/{folder}', [ObservedController::class, 'store'])->name('observeds.store')
        ->middleware('permission:observeds.store');
    Route::put('observeds/{observed}', [ObservedController::class, 'update'])->name('observeds.update')
        ->middleware('permission:observeds.update');
    Route::delete('observeds/{observed}', [ObservedController::class, 'destroy'])->name('observeds.destroy')
        ->middleware('permission:observeds.destroy');

    // Approveds
    Route::get('approveds', [ApprovedController::class, 'index'])->name('approveds.index')
        ->middleware('permission:approveds.index');
    Route::get('approveds/store/{folder}', [ApprovedController::class, 'store'])->name('approveds.store')
        ->middleware('permission:approveds.store');
    Route::put('approveds/{approved}', [ApprovedController::class, 'update'])->name('approveds.update')
        ->middleware('permission:approveds.update');
    Route::delete('approveds/{approved}', [ApprovedController::class, 'destroy'])->name('approveds.destroy')
        ->middleware('permission:approveds.destroy');

    // Rejecteds
    Route::get('rejecteds', [RejectedController::class, 'index'])->name('rejecteds.index')
        ->middleware('permission:rejecteds.index');
    Route::get('rejecteds/store/{folder}', [RejectedController::class, 'store'])->name('rejecteds.store')
        ->middleware('permission:rejecteds.store');
    Route::put('rejecteds/{rejected}', [RejectedController::class, 'update'])->name('rejecteds.update')
        ->middleware('permission:rejecteds.update');
    Route::delete('rejecteds/{rejected}', [RejectedController::class, 'destroy'])->name('rejecteds.destroy')
        ->middleware('permission:rejecteds.destroy');

    // Disbursement
    Route::get('disbursements', [DisbursementController::class, 'index'])->name('disbursements.index')
        ->middleware('permission:disbursements.index');
    Route::get('disbursements/store/{folder}', [DisbursementController::class, 'store'])->name('disbursements.store')
        ->middleware('permission:disbursements.store');
    Route::put('disbursements/{disbursement}', [DisbursementController::class, 'update'])->name('disbursements.update')
        ->middleware('permission:disbursements.update');
    Route::delete('disbursements/{disbursement}', [DisbursementController::class, 'destroy'])->name('disbursements.destroy')
        ->middleware('permission:disbursements.destroy');

    // User Route

    // Folder
    Route::get('usrfolders', [App\Http\Controllers\User\FolderController::class, 'index'])->name('usrfolders.index')
        ->middleware('permission:usrfolders.index');
    Route::post('usrfolders/store', [App\Http\Controllers\User\FolderController::class, 'store'])->name('usrfolders.store')
        ->middleware('permission:folders.store');
    Route::get('usrfolders/{folder}', [App\Http\Controllers\User\FolderController::class, 'show'])->name('usrfolders.show');
        // ->middleware('permission:usrfolders.index');


    // Assign
    Route::get('usrassigns/store/{folder}', [App\Http\Controllers\User\AssignController::class, 'store'])->name('usrassigns.store');
    // ->middleware('permission:usrfolders.index');

    // INDEPENDIENTE
    Route::get('usrfoldersI/{folder}', [App\Http\Controllers\User\FolderController::class, 'indep'])->name('usrfoldersI.indep');
        // ->middleware('permission:usrfolders.index');
    // ASALARIADOS FORMALES E INFORMALES
    Route::get('usrfoldersAFI/{folder}', [App\Http\Controllers\User\FolderController::class, 'asal'])->name('usrfoldersAFI.asal');
        // ->middleware('permission:usrfolders.index');
    // GARANTES INDEPENDIENTE
    Route::get('usrfoldersGI/{folder}', [App\Http\Controllers\User\FolderController::class, 'indepG'])->name('usrfoldersGI.indepG');
        // ->middleware('permission:usrfolders.index');
    // GARANTES ASALARIADOS FORMALES E INFORMALES
    Route::get('usrfoldersGAFI/{folder}', [App\Http\Controllers\User\FolderController::class, 'asalG'])->name('usrfoldersGAFI.asalG');
        // ->middleware('permission:usrfolders.index');

    // cliente deudor
    Route::post('usrdeudor/store', [App\Http\Controllers\User\ClientController::class, 'deudor'])->name('usrdeudor.store')
        ->middleware('permission:clients.store');
    // cliente codeudor
    Route::post('usrcodeudor/store', [App\Http\Controllers\User\ClientController::class, 'codeudor'])->name('usrcodeudor.store')
        ->middleware('permission:clients.store');
    // cliente garante
    Route::post('usrgarante/store', [App\Http\Controllers\User\ClientController::class, 'garante'])->name('usrgarante.store')
        ->middleware('permission:clients.store');
    // cliente cogarante
    Route::post('usrcogarante/store', [App\Http\Controllers\User\ClientController::class, 'cogarante'])->name('usrcogarante.store')
        ->middleware('permission:clients.store');
    // cliente update
    Route::put('usrclientupdate/{client}', [App\Http\Controllers\User\ClientController::class, 'update'])->name('usrclients.update')
        ->middleware('permission:clients.update');

    Route::get('usrsolicitudes/{client}', [App\Http\Controllers\User\ClientController::class, 'solicitud'])->name('usrsolicitudes.show');
        // ->middleware('permission:clients.store');
    Route::get('usrcroquis/{client}', [App\Http\Controllers\User\ClientController::class, 'croqui'])->name('usrcroquis.show');
        // ->middleware('permission:clients.store');
    Route::get('usrdps/{client}', [App\Http\Controllers\User\ClientController::class, 'dp'])->name('usrdps.show');
        // ->middleware('permission:clients.store');
    Route::get('usravaluos/{client}', [App\Http\Controllers\User\ClientController::class, 'avaluo'])->name('usravaluos.show');
        // ->middleware('permission:clients.store');
    Route::get('usrhcs/{client}', [App\Http\Controllers\User\ClientController::class, 'hc'])->name('usrhcs.show');
        // ->middleware('permission:clients.store');
    Route::get('usrinventarios/{client}', [App\Http\Controllers\User\ClientController::class, 'inventario'])->name('usrinventarios.show');
        // ->middleware('permission:clients.store');
    Route::get('usrdocumentos/{client}', [App\Http\Controllers\User\ClientController::class, 'documento'])->name('usrdocumentos.show');
        // ->middleware('permission:clients.store');
    Route::get('usrevaluacions/{client}', [App\Http\Controllers\User\ClientController::class, 'evaluacion'])->name('usrevaluacions.show');
        // ->middleware('permission:clients.store');
    Route::get('usraevaluacions/{client}', [App\Http\Controllers\User\ClientController::class, 'evaluaciona'])->name('usraevaluacions.show');
        // ->middleware('permission:clients.store');
    Route::get('usrresolucions/{client}', [App\Http\Controllers\User\ClientController::class, 'resolucion'])->name('usrresolucions.show');
        // ->middleware('permission:clients.store');


    Route::get('usrconyegue/{client}', [App\Http\Controllers\User\ClientController::class, 'conyegue'])->name('usrconyegue.show')
    ->middleware('permission:clients.store');


    Route::post('muebleworks/store', [App\Http\Controllers\User\ClientController::class, 'mueble'])->name('muebleworks.store')
        ->middleware('permission:works.store');
    Route::post('maquinariaworks/store', [App\Http\Controllers\User\ClientController::class, 'maquinaria'])->name('maquinariaworks.store')
        ->middleware('permission:works.store');
    Route::post('mercaderiaworks/store', [App\Http\Controllers\User\ClientController::class, 'mercaderia'])->name('mercaderiaworks.store')
        ->middleware('permission:works.store');


    Route::post('primaryinventories/store', [App\Http\Controllers\User\ClientController::class, 'primary'])->name('primaryinventories.store')
        ->middleware('permission:inventories.store');
    Route::post('secondaryinventories/store', [App\Http\Controllers\User\ClientController::class, 'secondary'])->name('secondaryinventories.store')
        ->middleware('permission:inventories.store');


    Route::post('inmuebledocuments/store', [App\Http\Controllers\User\ClientController::class, 'inmueble'])->name('inmuebledocuments.store')
        ->middleware('permission:documents.store');
    Route::post('vehiculodocuments/store', [App\Http\Controllers\User\ClientController::class, 'vehiculo'])->name('vehiculodocuments.store')
        ->middleware('permission:documents.store');


    Route::post('diasales/store', [App\Http\Controllers\User\ClientController::class, 'dia'])->name('diasales.store')
        ->middleware('permission:sales.store');
    Route::post('semanasales/store', [App\Http\Controllers\User\ClientController::class, 'semana'])->name('semanasales.store')
        ->middleware('permission:sales.store');
    Route::post('messales/store', [App\Http\Controllers\User\ClientController::class, 'mes'])->name('messales.store')
        ->middleware('permission:sales.store');

    Route::post('icoclientes/store', [App\Http\Controllers\User\ClientController::class, 'ingcliente'])->name('icoclientes.store')
        ->middleware('permission:icos.store');
    Route::post('icoconyuges/store', [App\Http\Controllers\User\ClientController::class, 'ingconyuge'])->name('icoconyuges.store')
        ->middleware('permission:icos.store');



    // Assigns
    Route::get('folder/usrAssign', [App\Http\Controllers\User\FolderController::class, 'assign'])->name('folder.assign');
        // ->middleware('permission:folders.index');


    //folders EA
    //Carla
    Route::get('foldersCC', [App\Http\Controllers\User\FolderController::class, 'carla'])->name('folders.carla');
    // ->middleware('permission:folders.index');
    // alex
    Route::get('foldersTP', [App\Http\Controllers\User\FolderController::class, 'alex'])->name('folders.alex');
    // ->middleware('permission:folders.index');
    // roxana
    Route::get('foldersPP', [App\Http\Controllers\User\FolderController::class, 'roxana'])->name('folders.roxana');
    // ->middleware('permission:folders.index');
    // Mariela
    Route::get('foldersCV', [App\Http\Controllers\User\FolderController::class, 'mariela'])->name('folders.mariela');
    // ->middleware('permission:folders.index');
    // Vero
    Route::get('foldersRS', [App\Http\Controllers\User\FolderController::class, 'veronica'])->name('folders.veronica');
    // ->middleware('permission:folders.index');

    // Folders
    Route::get('foldersRegistrados', [App\Http\Controllers\User\FolderController::class, 'regist'])->name('folders.regist');
    // ->middleware('permission:folders.index');
    Route::get('foldersComercial', [App\Http\Controllers\User\FolderController::class, 'comercial'])->name('folders.comercial');
    // ->middleware('permission:folders.index');
    Route::get('foldersNacional', [App\Http\Controllers\User\FolderController::class, 'nacional'])->name('folders.nacional');
    // ->middleware('permission:folders.index');
    Route::get('foldersDisbursement', [App\Http\Controllers\User\FolderController::class, 'disbursement'])->name('folders.disbursement');
    // ->middleware('permission:folders.index');

    // print
    Route::get('resprint/{client}', [App\Http\Controllers\User\PrintController::class, 'resprint'])->name('print.resolucion');
    Route::get('solprint/{client}', [App\Http\Controllers\User\PrintController::class, 'solprint'])->name('print.solicitud');
    Route::get('croprint/{client}', [App\Http\Controllers\User\PrintController::class, 'croprint'])->name('print.croqui');
    Route::get('dpprint/{client}', [App\Http\Controllers\User\PrintController::class, 'dpprint'])->name('print.declaracion');
    Route::get('avalprint/{client}', [App\Http\Controllers\User\PrintController::class, 'avalprint'])->name('print.avaluao');
    Route::get('rdprint/{client}', [App\Http\Controllers\User\PrintController::class, 'rdprint'])->name('print.recepcion');
});
