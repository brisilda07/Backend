<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/logout',[AdminUserController::class,'AdminLogout'])->name('admin.logout');

Route::prefix('admin')->group(function(){

    Route::get('/user/profile',[AdminUserController::class, 'UserProfile'])->name('user.profile');
    Route::get('/user/profile/edit',[AdminUserController::class, 'UserProfileEdit'])->name('user.profile.edit');
    Route::post('/user/profile/store',[AdminUserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/change/password',[AdminUserController::class, 'UserChangePassword'])->name('change.password');
    Route::post('/change/password/update',[AdminUserController::class, 'UserPasswordUpdate'])->name('change.password.update');
});

//Information All Routes
Route::prefix('information')->group(function(){

    Route::get('/all',[InformationController::class, 'AllInformation'])->name('all.information');
    Route::get('/add',[InformationController::class, 'AddInformation'])->name('add.information');
    Route::post('/store',[InformationController::class, 'StoreInformation'])->name('store.information');
    Route::get('/edit/{id}',[InformationController::class, 'EditInformation'])->name('edit.information');
    Route::post('/update/{id}',[InformationController::class, 'UpdateInformation'])->name('information.update');
    Route::get('/delete/{id}',[InformationController::class, 'DeleteInformation'])->name('delete.information');

});

//Services All Routes
Route::prefix('service')->group(function(){

    Route::get('/all',[ServiceController::class, 'AllService'])->name('all.services');
   // Route::get('/add',[ServiceController::class, 'AddInformation'])->name('add.information');
   // Route::post('/store',[ServiceController::class, 'StoreInformation'])->name('store.information');
   // Route::get('/edit/{id}',[ServiceController::class, 'EditInformation'])->name('edit.information');
   // Route::post('/update/{id}',[ServiceController::class, 'UpdateInformation'])->name('information.update');
    //Route::get('/delete/{id}',[ServiceController::class, 'DeleteInformation'])->name('delete.information');

});
