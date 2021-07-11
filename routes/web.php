<?php

use App\Http\Controllers\UserController;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {

//     return view('welcome');
// });


// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
Route::get('gr','AdminController@admin')->name('gr');
Route::group(['middleware' =>['auth']],function(){


// Admin Routes

Route::get('/dashboard','AdminController@dashboard');
Route::get('admin/order','AdminController@placedorders');
Route::get('admin/accountdetails/{order_id}','AdminController@accountdetails');
Route::get('admin/invoice/{order_id}','AdminController@invoice');
Route::get('admin/invoiceprint/{order_id}','AdminController@invoiceprint');


// Category Routes
Route::get('category/add','CategoryController@addcategory');
Route::post('category/save','CategoryController@save');
Route::get('category/display','CategoryController@display');
Route::get('category/view/{id}','CategoryController@view');
Route::get('category/edit/{id}','CategoryController@edit');
Route::post('category/update','CategoryController@update');
Route::get('category/delete/{id}','CategoryController@delete');

//Product Routes
Route::get('product/addproduct','ProductController@create');
Route::post('product/save','ProductController@save');
Route::get('product/display','ProductController@display');
Route::get('product/show/{id}','ProductController@show');
Route::get('product/edit/{id}','ProductController@edit');
Route::post('product/update','ProductController@update');
Route::get('product/delete/{id}','ProductController@delete');

//Coupon Routes
Route::get('coupon/create','CouponController@create');
Route::post('coupon/save','CouponController@save');
Route::get('coupon/display','CouponController@display');
Route::get('coupon/view/{id}','CouponController@view');
Route::get('coupon/edit/{id}','CouponController@edit');
Route::post('coupon/update','CouponController@update');
Route::get('coupon/delete/{id}','CouponController@delete');

//Banner Routes
Route::get('banner/create','BannerController@create');
Route::post('banner/save','BannerController@save');
Route::get('banner/display','BannerController@display');
Route::get('banner/view/{id}','BannerController@view');
Route::get('banner/edit/{id}','BannerController@edit');
Route::post('banner/update','BannerController@update');
Route::get('banner/delete/{id}','BannerController@delete');

//Subimages Routes
Route::get('subimages/create','SubimageController@create');
Route::post('subimages/save','SubimageController@store');
Route::get('subimages/display','SubimageController@show');

// UPdate Order status
Route::get('editstatus/{id}','AdminController@editstatus');
Route::post('updatestatus','AdminController@updatestatus');


}); // middleware  close





















//Frontend Routes

// master routes

Route::get('/','FrontController@index');
Route::get('productdetail/{id}','FrontController@productdetail');




//Place Order
Route::post('place_order','FrontController@placeorder');



//Cart
Route::post('addtocart','FrontController@addtocart');
Route::get('cart','FrontController@cart');
Route::get('cart/delete/{id}','FrontController@deletecart');
Route::get('cart/updatequantity/{id}/{product_quantity}','FrontController@updatequantity');


//Popular Categories
Route::get('categories/popularcategories','FrontController@popularcategories');

// FeaturedProducts
Route::get('featuredproducts/{id}','FrontController@featuredproducts');
// CategoryProducts
Route::get('categoryproducts/{id}','FrontController@categoryproducts');



// checkemail
Route::match(['get', 'post'], '/check-email', 'UserController@checkEmail');

//Custom Register Login
Route::get('login-register','UserController@loginRegister');
Route::post('registerusers','UserController@registerusers');
Route::get('signin','UserController@login'); //front login
Route::post('front/login','UserController@loginUser');
Route::get('front/logout','UserController@logout');
Route::match(['get', 'post'], '/confirm/{code}','UserController@confirmAccount');

// forgot Password
Route::match(['get', 'post'], '/forgot-password','UserController@forgotpassword');





Route::get('razorpay-payment', 'RazorpayController@create')->name('pay.with.razorpay'); // create payment



#Add to wishlist
Route::get('wishlist','FrontController@getwishlist');
Route::post('wishlist','FrontController@postwishlist');
Route::get('wishlist/itemdelete/{id}','FrontController@wishlistdeleteitem');

Route::get('/searchajax', 'SearchController@searchautocomplete')->name('searchproductajax');
Route::post('/searching','SearchController@results');
Route::get('search_btn_results/{id}','SearchController@search_btn_results');






Route::group(['middleware' =>['frontlogin']],function(){


Route::post('/paytm-callback', 'FrontController@paytmCallback');  //Paytm Gateway

// payu momney routes
Route::get('payumoney','PayUController@payumoneypayment');



Route::post('/change-password', 'FrontController@changepassword')->name('change.password');// My Account Change  Password
Route::get('thanks','FrontController@thanks');
Route::get('myaccount','FrontController@myaccount');
//Invoice
Route::get('invoice','FrontController@invoice');
Route::get('invoice/{id}','FrontController@invoice');
Route::get('checkout','FrontController@checkout');


});

//Login with Socialite Routess
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');





Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});





