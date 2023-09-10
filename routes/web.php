<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DispenseController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {

    Route::get('/all_products', [ProductController::class, 'index'])->name('all_product');
    Route::get('add_product', [ProductController::class, 'create'])->name('add_product');
    // Route to handle the product creation form submission
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');


    Route::get('/all_categories', [CategoryController::class,'index'])->name('all_categories');
    Route::get('add_categories', [CategoryController::class, 'create'])->name('add_categories');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');


    Route::get('/all_store', [StoreController::class,'index'])->name('all_store');
    Route::get('add_store', [StoreController::class, 'create'])->name('add_store');
    Route::post('add_categories', [StoreController::class, 'store'])->name('store.create');


    Route::get('add_dispense', [DispenseController::class, 'index'])->name('add_dispense');
    Route::get('dispense/{client_id}', [DispenseController::class, 'reload'])->name('dispense.reload');

    Route::post('/dispense', [DispenseController::class, 'store'])->name('dispense.store');
    Route::post('/dispense/verify', [DispenseController::class, 'verify'])->name('dispense.verify');
    Route::get('/dispense/delete/{id}', [DispenseController::class, 'destroy'])->name('dispense.destroy');




    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/index', [ClientController::class, 'index'])->name('client.index');



    Route::get('/item/all_item', [ItemController::class,'index'])->name('all_item');
    Route::get('/item/add_item', [ItemController::class, 'create'])->name('add_item');
    Route::post('/item', [ItemController::class, 'store'])->name('item.store');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
