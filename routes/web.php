<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ShopDepartmentsController;
use App\Http\Controllers\Frontend\CartController;


use App\Http\Controllers\Backend\HomePage\ProductController;
use App\Http\Controllers\Backend\HomePage\BannerTwoController;
use App\Http\Controllers\Backend\HomePage\FeaturedProductController;
use App\Http\Controllers\Backend\HomePage\First_BannerController;
use App\Http\Controllers\Backend\HomePage\Top_ProductController;
use App\Http\Controllers\Backend\HomePage\FromTheBlogController;
use App\Http\Controllers\Backend\Blogs\BlogPageController;
use App\Http\Controllers\Backend\HomePage\CarouselController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';



// Route::get('/message',[ContactMessageController::class,'index']);
// Route::post('/save',[ContactMessageController::class,'store']);
// Route::get('/login',[AuthController::class,'index']);
// Route::post('/postlogin',[AuthController::class,'postlogin']);
// Route::get('/register',[AuthController::class,'register']);
// Route::post('/post-reg',[AuthController::class,'postregister']);
// Route::post('/logout',[AuthController::class,'logout']);


Route::get('/',[HomeController::class,'index']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::post('/save',[ContactController::class,'store']);
Route::get('/shop-details',[PagesController::class,'shop_details']);
Route::get('/shoping-cart',[PagesController::class,'shoping_cart']);
Route::get('/checkout',[PagesController::class,'check_out']);
Route::get('/blog-details',[PagesController::class,'blog_details']);
Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/fruits',[ShopDepartmentsController::class,'fruitsNut']);



Route::group(['prefix'=>'/admin'], function () {
    Route::resource('f_product', FeaturedProductController::class)->middleware(['auth', 'verified'])->names('fp');
    Route::resource('banner', First_BannerController::class)->middleware(['auth', 'verified'])->names('fb');
    Route::resource('banner_two', BannerTwoController::class)->middleware(['auth', 'verified'])->names('banner_two');
    Route::resource('top-product', Top_ProductController::class)->middleware(['auth', 'verified'])->names('topProduct');
    Route::resource('product', ProductController::class)->middleware(['auth', 'verified'])->names('product');
    Route::resource('fromblog', FromTheBlogController::class)->middleware(['auth', 'verified'])->names('fromblog');
    Route::resource('carousel', CarouselController::class)->middleware(['auth', 'verified'])->names('carousel');
    Route::resource('blogs', BlogPageController::class)->middleware(['auth', 'verified'])->names('blog');
 });
 Route::group(['prefix'=>'/carts'], function (){
    Route::get('/',[CartController::class,'index'])->name('cart');
    Route::post('/add_cart/{id}',[CartController::class,'store'])->name('add_cart');
    Route::put('/update/{id}',[CartController::class,'update'])->name('cart_update');
    Route::delete('/delete/{id}',[CartController::class,'delete'])->name('cart_delete');
    Route::get('/edit/{id}',[CartController::class,'delete'])->name('cart_delete');
 });


 Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
