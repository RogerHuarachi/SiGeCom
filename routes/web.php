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

});