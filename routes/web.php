<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\VehicleController;
use App\Http\Controllers\admin\PageController;

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

Route::get('/', [FrontendController::class,'index']);
Route::get('/{slug}', [FrontendController::class,'page']);

Route::middleware(['auth', 'admin'])->prefix('/admins')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class,'index'])->name('index');
    /*Setting*/
    Route::get('/setting', [AdminController::class,'setting'])->name('setting');
    Route::post('/setting', [AdminController::class,'setting_update'])->name('setting-update');
    /*Setting*/

    /*Vehilce*/
    Route::get('/vehicle', [VehicleController::class,'index'])->name('vehicle');
    Route::get('/vehicle/add', [VehicleController::class,'add'])->name('vehicle-add');
    Route::post('/vehicle/store', [VehicleController::class,'store'])->name('vehicle-store');
    Route::get('/vehicle/edit/{id}', [VehicleController::class,'edit'])->name('vehicle-edit');
    Route::post('/vehicle/update/{id}', [VehicleController::class,'update'])->name('vehicle-update');
    Route::get('/vehicle/delete/{id}', [VehicleController::class,'delete'])->name('vehicle-delete');
    /*Vehilce*/

    /*Vehilce*/
    Route::get('/page', [PageController::class,'index'])->name('page');
    Route::get('/page/add', [PageController::class,'add'])->name('page-add');
    Route::post('/page/store', [PageController::class,'store'])->name('page-store');
    Route::get('/page/edit/{id}', [PageController::class,'edit'])->name('page-edit');
    Route::post('/page/update/{id}', [PageController::class,'update'])->name('page-update');
    Route::get('/page/delete/{id}', [PageController::class,'delete'])->name('page-delete');
    /*Vehilce*/

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
