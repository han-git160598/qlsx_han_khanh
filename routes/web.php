<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Events\sendMessage;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Redirect;
use App\NhanVien;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
//form

//real-time
//$i=1

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //tra ve gia tri
});



Route::get('/',function() {
    return view('home.home');
});
Route::group(['prefix' => 'home'], function () {
    Route::get('about-us',function () {
        return view('home.home_about_us');
    });
    Route::get('process',function () {
        return view('home.home_process');
    });
    Route::get('product',function () {
        return view('home.home_product');
    });
    Route::get('service',function () {
        return view('home.home_service');
    });
    Route::get('contact',function () {
        return view('home.home_contact');
    });

});
Route::group(['prefix' => 'customer'], function () {
    Route::get('login',function () {
        return view('customer.customer_login');
    });
    Route::get('register',function () {
        return view('customer.customer_register');
    });

    Route::post('check_login', 'loginController@login');
    Route::get('check_logout', 'loginController@logout');
    
    Route::get('home',function () {
        return view('customer.customer_home');
    });
    Route::get('cart',function () {
        return view('customer.customer_cart');
    });
    Route::get('order',function () {
        return view('customer.customer_order');
    });
    Route::get('profile',function () {
        return view('customer.customer_profile');
    });
    Route::get('notify',function () {
        return view('customer.customer_notify');
    });

});



Route::group(['prefix' => 'admin'], function () {

    Route::get('/',function () {
        return view('admin.admin_home');
    });

    Route::get('/about',function () {
        return view('admin.admin_about');
    });

     Route::get('/product',function () {
        return view('admin.admin_product');
    });

      Route::get('/process',function () {
        return view('admin.admin_process');
    });

       Route::get('/service',function () {
        return view('admin.admin_service');
    });
       
        Route::get('/contact',function () {
        return view('admin.admin_contact');
    });

});






Route::group(['prefix' => 'page'], function () {
    Route::post('login', 'loginController@login');
    Route::get('logout', 'loginController@logout');
    Route::post('send-otp', 'loginController@send_otp');
});



