<?php

use App\Models\Costumer;
use App\Models\Orderitem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CostumerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderItemController;
use App\Http\Controllers\Admin\ManfacturerController;

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
Route::redirect('/admin', '/admin/login');



Route::prefix('admin')->middleware(['auth','web'])->group(function () {

    Route::get('/edit_profile',[ProfileController::class,'edit_profile']);
    Route::post('/update_profile',[ProfileController::class,'update_profile']);
    Route::post('/update_password',[ProfileController::class,'update_password']);
    Route::resource('/category' ,CategoryController::class );
    Route::resource('/type' ,TypeController::class );
    Route::resource('/manfacturer' ,ManfacturerController::class );
    Route::resource('/product' ,ProductController::class );
    Route::resource('/order' ,OrderController::class );
    Route::resource('/costumer' ,CostumerController::class );
    Route::resource('/ad' ,AdController::class );
    Route::resource('/slider' ,SliderController::class );

    Route::resource('/orderitem' ,OrderItemController::class );


    Route::resource('/users',UserController::class);


    Route::get('/dashboard', [DashboardController::class , 'index']);
    
});
Route::get('/', [FrontendController::class , 'index']);
Route::get('/cart', [FrontendController::class , 'cart']);
Route::get('/products', [FrontendController::class , 'product']);
Route::get('/aboutus', [FrontendController::class , 'aboutus']);
Route::get('/contactus', [FrontendController::class , 'contactus']);
Route::get('/details/{$id}', [FrontendController::class , 'show']);
Route::post('/check',[FrontendController::class , 'store']);
Route::get('/checkout',[FrontendController::class , 'checkout']);
Route::get('change_language/{lang}' , [LanguageController::class , 'change']);
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
require __DIR__ . '/auth.php';
