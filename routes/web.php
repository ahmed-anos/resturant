<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainImageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\SpecialDishController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkingHourController;
use App\Http\Middleware\Setlocale;
use Database\Seeders\SettingTableSeeder;
use Illuminate\Support\Facades\Route;


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

/* home */
Route::get('/register', function () {
    abort(404);
});
Route::middleware([Setlocale::class])->group(function () {
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

/* Admin */
Route::middleware('auth')->controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.index');
});

/* User */
Route::resource('user', UserController::class)->only([
    'index','destroy'
]);

/* Reservation */
Route::resource('reservation', ReservationController::class)->only([
    'index','store'
]);

/* Food Menu */
Route::resource('foodmenu', FoodMenuController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

/* Special Dish */
Route::resource('specialdishes', SpecialDishController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

/* Testimonial */
Route::resource('testimonial', TestimonialController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

/* Settings */
Route::get('setting' , [Setting::class , 'index'])->name('general.settings');
Route::get('setting/edit' , [Setting::class , 'edit'])->name('setting.edit');
Route::put('setting/update' , [Setting::class , 'update'])->name('setting.update');
Route::get('/settings/main-images', [Setting::class, 'mainImages'])->name('main.images');

/* Working Hours */
Route::get('/settings/working-hours', [WorkingHourController::class, 'index'])->name('working.hours');
Route::get('/settings/working-hours/edit', [WorkingHourController::class, 'edit'])->name('working-hours.edit');
Route::put('/settings/working-hours/update/{id}', [WorkingHourController::class, 'update'])->name('working-hours.update');

/* Main Images */
Route::get('settings/images' ,[MainImageController::class, 'index'])->name('main.images');
Route::get('settings/images/edit' ,[MainImageController::class, 'edit'])->name('main-images.edit');
Route::put('settings/images/update' ,[MainImageController::class, 'update'])->name('main-images.update');

/* jetstream auth */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
});
/* set Localization */

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');
