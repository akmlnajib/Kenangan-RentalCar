<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CarRentalController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\Admin\CustomController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;

Route::get('/storage-link', function(){
    Artisan::call('storage-link');
    return 'Storage Linked successfully.';
});

Route::get('/', [ShowController::class, 'index'])->name('home');
Route::get('/index', [ShowController::class, 'index'])->name('index');

Route::prefix('admin')
    ->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])
    ->group(function () {
        
        Route::resource('cars', CarController::class)->names([
            'index'   => 'admin.cars.index',
            'create'  => 'admin.cars.create',
            'store'   => 'admin.cars.store',
            'show'    => 'admin.cars.show',
            'edit'    => 'admin.cars.edit',
            'update'  => 'admin.cars.update',
            'destroy' => 'admin.cars.destroy',
        ]);

        Route::resource('car-rental', CarRentalController::class)->names([
            'index'   => 'admin.car_rental.index',
            'create'  => 'admin.car_rental.create',
            'store'   => 'admin.car_rental.store',
            'show'    => 'admin.car_rental.show',
            'edit'    => 'admin.car_rental.edit',
            'update'  => 'admin.car_rental.update',
            'destroy' => 'admin.car_rental.destroy',
        ]);

        Route::resource('custom', CustomController::class)->names([
            'index'   => 'admin.custom.index',
            'edit'    => 'admin.custom.edit',
            'update'  => 'admin.custom.update',
        ]);

        Route::resource('transactions', TransactionController::class)->names([
            'index'   => 'admin.transactions.index',
            'create'  => 'admin.transactions.create',
            'store'   => 'admin.transactions.store',
            'show'    => 'admin.transactions.show',
            'edit'    => 'admin.transactions.edit',
            'update'  => 'admin.transactions.update',
            'destroy' => 'admin.transactions.destroy',
        ]);

        Route::resource('users', UserController::class)->names([
            'index'   => 'admin.users.index',
            'create'  => 'admin.users.create',
            'store'   => 'admin.users.store',
            'show'    => 'admin.users.show',
            'edit'    => 'admin.users.edit',
            'update'  => 'admin.users.update',
            'destroy' => 'admin.users.destroy',
        ]);
        

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');
    });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
