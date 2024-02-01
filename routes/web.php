<?php

use App\Http\Controllers\Admin\AbsensiStaffController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\penjualanController as AdminPenjualanController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\staff\dataAbsen;
use App\Http\Controllers\user\ControllerHotmenu;
use App\Http\Controllers\user\controllerMenuMinuman;
use App\Http\Controllers\user\penjualanController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);

route::middleware(['auth'])->group(function () {
    route::controller(penjualanController::class)->group(function () {
        route::get('/kantinKampoes', 'index')->name('halaman.utama.admin');
        Route::get('User/cart/makanan', 'bookCart')->name('shopping.cart.makanan');
        Route::get('catalog/makanan/{id}', 'addBooktoCart')->name('cart.produk.makanan');
        Route::delete('/delete-cart-product/makanan', 'deleteProduct')->name('delete.cart.product.makanan');
        Route::get('/data/simpan/makanan', 'checkout')->name('checkout.makanan');
        Route::get('/invoice', 'invoice')->name('invoice');
        Route::get('/payment/makanan', 'bayar')->name('bayar.barang.makanan');
        Route::get('/outTeam', 'ourTeam')->name('ourteam');
    });
    route::controller(ControllerHotmenu::class)->group(function () {
        route::get('user/hotmenu', 'index')->name('hotmenu.user');
    });
    route::controller(controllerMenuMinuman::class)->group(function () {
        route::get('user/menu/minuman', 'index')->name('menu.user.minuman');
        Route::get('User/cart/minuman', 'bookCart')->name('shopping.cart.minuman');
        Route::get('catalog/minuman/{id}', 'addBooktoCart')->name('cart.produk.minuman');
        Route::delete('/delete-cart-product/minuman', 'deleteProduct')->name('delete.cart.product.minuman');
        Route::get('/data/simpan', 'checkout')->name('checkout.minuman');
        Route::get('/invoice', 'invoice')->name('invoice');
        Route::get('/payment/minuman', 'bayar')->name('bayar.barang.minuman');
        Route::get('/outTeam', 'ourTeam')->name('ourteam');
        route::get('update-cart-product-makanan/{id}', 'updateCartProductMakanan')->name('update.cart.product.makanan');
    });
});

route::middleware(['auth', 'staff'])->group(function(){
    route::controller(dataAbsen::class)->group(function(){
        route::get('data/absen/staff', 'index')->name('absen.staff');
        route::post('data/simpan/absensi', 'SimpanData')->name('simpan.absensi');
    });
});

route::middleware(['auth', 'admin'])->group(function () {
    route::controller(DashboardController::class)->group(function () {
        route::get('Dashboard', 'index')->name('halaman.utama.user');
        route::get('Halaman/Menu_minuman', 'halamanMinuman')->name('Admin.menu.minuman');
        route::get('Halaman/Absensi/staff', 'Absensi')->name('Data.Absensi');
    });
    route::controller(AdminPenjualanController::class)->group(function(){
        route::get('Admin/penjualan', 'index')->name('Admin.home');
        route::get('Admin/add_Data/penjualan', 'AddData')->name('Add_data.Admin');
        route::post('Admin/Input/penjualan', 'InputData')->name('InputData.Admin');
        route::get('Admin/Edit/{id}', 'edit')->name('Admin.edit.data');
        route::post('Admin/edit/simpan/{id}', 'update')->name('Admin.simpan.edit');
        route::get('Admin/delete/{id}', 'destroy')->name('Admin.delete.data');
    });
    route::controller(productController::class)->group(function(){
        route::get('Admin/TambahData/MenuMakanan', 'TambahData')->name('TambahData.makanan');
        route::post('Admin/Simpan', 'SimpanData')->name('SimpanData.makanan');
    });
    route::controller(AbsensiStaffController::class)->group(function(){
        route::get('Admin/Absensi/{id}', 'delete')->name('Absensi.hapus');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
