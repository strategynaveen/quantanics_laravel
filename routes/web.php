<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('about_page',function(){
    return view('about');
});

Route::get('contact_us',function(){
    return view('contact');
});

Route::get('services',function(){
    return view('services_page');
});

Route::get('our_client',function(){
    return view('clients'); 
});
Route::get('work',function(){
    return view('work_page'); 
});

// eic
Route::get('eic',function(){
    return view('eic_schem');   
});

// services
Route::prefix('services')->group(function(){
    Route::get('/',function(){
        return view('iot_service');
    });

    Route::get('customer',function(){
        return view('customer_service');
    });

    Route::get('development',function(){
        return view('development_service');
    });

    Route::get('etap',function(){
        return view('etap_service');
    });
});