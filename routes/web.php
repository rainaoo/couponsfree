<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\Rtlcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\backend\Pagecontroller;
use App\Http\Controllers\backend\Postcontroller;
use App\Http\Controllers\backend\BannersController;
use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CouponController;
use App\Http\Controllers\backend\DealController;
use App\Http\Controllers\backend\BlogController;

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
  /*** banners******* */

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
Route::get('/deal_single/{id?}',[DealController::class,'deal_single'])->name('deal_single');
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
 Route::get('/stores_single/{store?}',[StoreController::class,'stores_single'])->name('stores_single');
 /************* contact page **************************************** */
 Route::get('/contact',[Basecontroller::class,'contact'])->name('contact');
 /************* blogs page **************************************** */
 Route::get('/blogs',[Basecontroller::class,'blogs'])->name('blogs');
 Route::get('/blog_single/{blog?}',[BlogController::class,'blog_single'])->name('blog_single');
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
Route::get('/ar/deal_single/{id?}',[DealController::class,'deal_single_ar'])->name('deal_single-ar');
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
 Route::get('/ar/stores_single/{store?}',[StoreController::class,'stores_single_ar'])->name('stores_single-ar');
 /************* contact page **************************************** */
 Route::get('/ar/contact',[Rtlcontroller::class,'contact'])->name('contact-ar');
 /************* blogs page **************************************** */
 Route::get('/ar/blogs',[Rtlcontroller::class,'blogs'])->name('blogs-ar');
 Route::get('/ar/blog_single/{blog?}',[BlogController::class,'blog_single_ar'])->name('blog_single-ar');
 /************* checkout pages **************************************** */
 Route::get('/ar/checkout_method',[Rtlcontroller::class,'checkout_method'])->name('checkout_method-ar');
 Route::get('/ar/checkout_billing',[Rtlcontroller::class,'checkout_billing'])->name('checkout_billing-ar');
 Route::get('/ar/checkout_payment',[Rtlcontroller::class,'checkout_payment'])->name('checkout_payment-ar');


Route::get('/admin',[Admincontroller::class,'index'])->name('login');
Route::post('/admin',[Admincontroller::class,'makeLogin'])->name('makelogin');

Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('/dashboard',[Admincontroller::class,'dashboard'])->name('dashboard_en');
    Route::get('/dashboard_ar',[Admincontroller::class,'dashboard_ar'])->name('dashboard_ar');

    //banners
    Route::get('/banners',[BannersController::class,'banners'])->name('banners');
    Route::match(['get','post'],'/add_edit_banner/{id?}',[BannersController::class,'addEditBanners'])->name('addeditebanner');
    Route::post('update-banner-status',[BannersController::class,'updateBannerStatus']);
    Route::get('delete-banner/{id}',[BannersController::class,'deletBanner']);
   
    //stores  brands
    Route::get('/store',[StoreController::class,'stores'])->name('stores');
    Route::post('update-store-status',[StoreController::class,'updateStoreStatus']);
    Route::match(['get','post'],'add_edit_store/{id?}',[StoreController::class,'addEditStore'])->name('addeditestore');
     Route::get('delete-store/{id}',[StoreController::class,'deletStore']);


     //category
    Route::get('/category',[CategoryController::class,'Categories'])->name('Categories');
    Route::post('update-category-status',[CategoryController::class,'updateCategoryStatus']);
    Route::match(['get','post'],'add_edit_category/{id?}',[CategoryController::class,'addEditCategories'])->name('addeditecategory');
     Route::get('delete-category/{id}',[CategoryController::class,'deletCategory']);

     //coupons
     Route::get('coupons',[CouponController::class,'coupons'])->name('coupons');;
     Route::match(['get','post'],'add_edit_coupon/{id?}',[CouponController::class,'addEditCoupon'])->name('addeditecoupon');
     Route::post('update-coupon-status',[CouponController::class,'updateCouponStatus']);
     Route::get('delete-coupon/{id}',[CouponController::class,'deletCoupon']);
     Route::get('add_edit_coupon/delete-coupon-image/{id}',[CouponController::class,'deletCouponImage']);
   

     //deals
     Route::get('deals',[DealController::class,'deals'])->name('deals');;
     Route::match(['get','post'],'add_edit_deal/{id?}',[DealController::class,'addEditDeal'])->name('addeditedeal');
     Route::post('update-deal-status',[DealController::class,'updateDealStatus']);
     Route::get('delete-deal/{id}',[DealController::class,'deletDeal']);
     Route::get('add_edit_deal/delete-deal-image/{id}',[DealController::class,'deletDealImage']);

      //blogs
      Route::get('blog',[BlogController::class,'blogs'])->name('blog');;
      Route::match(['get','post'],'add_edit_blog/{id?}',[BlogController::class,'addEditBlog'])->name('addediteblog');
      Route::post('update-blog-status',[BlogController::class,'updateBlogStatus']);
      Route::get('delete-blog/{id}',[BlogController::class,'deletBlog']);
      Route::get('add_edit_blog/delete-blog-image/{id}',[BlogController::class,'deletBlogImage']);

    

});

