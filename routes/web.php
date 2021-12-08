<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\Rtlcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\backend\Pagecontroller;
use App\Http\Controllers\backend\Postcontroller;

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
/****************** template english languges ************************* */
Route::get('/',[Basecontroller::class,'home'])->name('home');
Route::get('/guide',[Basecontroller::class,'guide'])->name('guide');
Route::get('/faq',[Basecontroller::class,'faq'])->name('faq');
Route::get('/sing-in',[Basecontroller::class,'singin'])->name('sing-in');
Route::get('/sing-up',[Basecontroller::class,'singup'])->name('sing-up');
Route::get('/search',[Basecontroller::class,'search'])->name('search');
Route::get('/result',[Basecontroller::class,'result'])->name('result');
Route::get('/cart',[Basecontroller::class,'cart'])->name('cart');
Route::get('/wishlist',[Basecontroller::class,'wishlist'])->name('wishlist');
 /************* deals pages **************************************** */
Route::get('/deal_single',[Basecontroller::class,'deal_single'])->name('deal_single');
Route::get('/deals_grid',[Basecontroller::class,'deals_grid'])->name('deals_grid');
Route::get('/deal_grid_sidebar',[Basecontroller::class,'deal_grid_sidebar'])->name('deal_grid_sidebar');
Route::get('/deal_list',[Basecontroller::class,'deal_list'])->name('deal_list');
 /************* coupons pages **************************************** */
 Route::get('/coupons_grid_sidebar',[Basecontroller::class,'coupons_grid_sidebar'])->name('coupons_grid_sidebar');
 Route::get('/coupons_grid',[Basecontroller::class,'coupons_grid'])->name('coupons_grid');
 Route::get('/coupons_list',[Basecontroller::class,'coupons_list'])->name('coupons_list');
 /************* stores pages **************************************** */
 Route::get('/stores_search',[Basecontroller::class,'stores_search'])->name('stores_search');
 Route::get('/stores_categores',[Basecontroller::class,'stores_categores'])->name('stores_categores');
 Route::get('/stores_single',[Basecontroller::class,'stores_single'])->name('stores_single');
 /************* contact page **************************************** */
 Route::get('/contact',[Basecontroller::class,'contact'])->name('contact');
 /************* blogs page **************************************** */
 Route::get('/blogs',[Basecontroller::class,'blogs'])->name('blogs');
 Route::get('/blog_single',[Basecontroller::class,'blog_single'])->name('blog_single');
 /************* checkout pages **************************************** */
 Route::get('/checkout_method',[Basecontroller::class,'checkout_method'])->name('checkout_method');
 Route::get('/checkout_billing',[Basecontroller::class,'checkout_billing'])->name('checkout_billing');
 Route::get('/checkout_payment',[Basecontroller::class,'checkout_payment'])->name('checkout_payment');


 /****************** template arbic languges ************************* */
 Route::get('/ar/home',[Rtlcontroller::class,'home'])->name('home-ar');
 Route::get('/ar/guide',[Rtlcontroller::class,'guide'])->name('guide-ar');
Route::get('/ar/faq',[Rtlcontroller::class,'faq'])->name('faq-ar');
Route::get('/ar/sing-in',[Rtlcontroller::class,'singin'])->name('sing-in-ar');
Route::get('/ar/sing-up',[Rtlcontroller::class,'singup'])->name('sing-up-ar');
Route::get('/ar/search',[Rtlcontroller::class,'search'])->name('search-ar');
Route::get('/ar/result',[Rtlcontroller::class,'result'])->name('result-ar');
Route::get('/ar/cart',[Rtlcontroller::class,'cart'])->name('cart-ar');
Route::get('/ar/wishlist',[Rtlcontroller::class,'wishlist'])->name('wishlist-ar');
 /************* deals pages **************************************** */
Route::get('/ar/deal_single',[Rtlcontroller::class,'deal_single'])->name('deal_single-ar');
Route::get('/ar/deals_grid',[Rtlcontroller::class,'deals_grid'])->name('deals_grid-ar');
Route::get('/ar/deal_grid_sidebar',[Rtlcontroller::class,'deal_grid_sidebar'])->name('deal_grid_sidebar-ar');
Route::get('/ar/deal_list',[Rtlcontroller::class,'deal_list'])->name('deal_list-ar');
 /************* coupons pages **************************************** */
 Route::get('/ar/coupons_grid_sidebar',[Rtlcontroller::class,'coupons_grid_sidebar'])->name('coupons_grid_sidebar-ar');
 Route::get('/ar/coupons_grid',[Rtlcontroller::class,'coupons_grid'])->name('coupons_grid-ar');
 Route::get('/ar/coupons_list',[Rtlcontroller::class,'coupons_list'])->name('coupons_list-ar');
 /************* stores pages **************************************** */
 Route::get('/ar/stores_search',[Rtlcontroller::class,'stores_search'])->name('stores_search-ar');
 Route::get('/ar/stores_categores',[Rtlcontroller::class,'stores_categores'])->name('stores_categores-ar');
 Route::get('/ar/stores_single',[Rtlcontroller::class,'stores_single'])->name('stores_single-ar');
 /************* contact page **************************************** */
 Route::get('/ar/contact',[Rtlcontroller::class,'contact'])->name('contact-ar');
 /************* blogs page **************************************** */
 Route::get('/ar/blogs',[Rtlcontroller::class,'blogs'])->name('blogs-ar');
 Route::get('/ar/blog_single',[Rtlcontroller::class,'blog_single'])->name('blog_single-ar');
 /************* checkout pages **************************************** */
 Route::get('/ar/checkout_method',[Rtlcontroller::class,'checkout_method'])->name('checkout_method-ar');
 Route::get('/ar/checkout_billing',[Rtlcontroller::class,'checkout_billing'])->name('checkout_billing-ar');
 Route::get('/ar/checkout_payment',[Rtlcontroller::class,'checkout_payment'])->name('checkout_payment-ar');

Route::get('/admin',[Admincontroller::class,'index'])->name('login');
Route::post('/admin',[Admincontroller::class,'makeLogin'])->name('makelogin');

Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('/dashboard',[Admincontroller::class,'dashboard'])->name('dashboard_en');
    Route::get('/dashboard_ar',[Admincontroller::class,'dashboard_ar'])->name('dashboard_ar');

    //page
    Route::get('/add-page',[Pagecontroller::class,'addpage'])->name('addpage');
    Route::post('/create-page',[Pagecontroller::class,'createpage'])->name('create-page');
    Route::get('/company-page-add',[Pagecontroller::class,'ourcompany'])->name('company.page.add');


    //post
    Route::get('/show-post',[Postcontroller::class,'show'])->name('show-post');
    Route::get('/add-post',[Postcontroller::class,'create'])->name('addpost');
    Route::get('/post-edit/{post_id?}',[Postcontroller::class,'create'])->name('post-edit');
    Route::post('/add-post/{post_id?}',[Postcontroller::class,'store'])->name('post-store');
    Route::get('/post-delete/{post_id?}',[Postcontroller::class,'delete'])->name('post-delete');

});
