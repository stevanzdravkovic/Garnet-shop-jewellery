<?php

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

    Route::get('/', 'UnAuthorizedController@index')->name('home');


    Route::get('/earrings/{id}','UnAuthorizedController@showsingleProduct')->name('product');
    Route::get('/necklaces/{id}','UnAuthorizedController@showsingleProduct');
    Route::get('/rings/{id}','UnAuthorizedController@showsingleProduct');



    Route::get ('/register','LoginController@showRegisterForm');
    Route::post ('/register','LoginController@doRegister')->name('do-register');

    Route::get('/login','LoginController@showLoginForm');
    Route::post('/login','LoginController@doLogin')->name('do-login');

    Route::get('/logout',function()
    {
        session()->forget('user');
        session()->forget('cart');
        session()->forget('admin');
        return redirect()->route('home');
    })->name ('logout');


    Route::get('/product',function (){

        return view('pages.product');
    });

    Route::get('/necklaces','UnAuthorizedController@showNecklaces');
    Route::get('/earrings','UnAuthorizedController@showEarrings');
    Route::get('/rings','UnAuthorizedController@showRings');


    Route::get('add-to-cart/{id}','UnAuthorizedController@getAddToCart')->name ('addToCart');
    Route::get('/cart','UnAuthorizedController@getCart')->name ('getCart');
    Route::get('deleteCart/{id}','UnAuthorizedController@deleteproductCart');
    Route::get('removeCart/{id}','UnAuthorizedController@getRemoveitem');
    Route::get('/checkout','UnAuthorizedController@getCheckout')->name('checkout');


    Route::get('/place-order','UnAuthorizedController@insertOrder')->name('insert-order');






    Route::get('/contact','MailController@contact')->name('showContactForm');
    Route::post('/contact','MailController@doContact')->name('doContact');



    Route::get('/admin','AdminController@adminPanel')
        ->middleware('UserMiddleware')->name('admin');
    Route::get('/admin/insert/products','AdminController@showInsertForm')
        ->middleware('UserMiddleware')->name('showInsertForm');
    Route::post('/admin/insert/products','AdminController@Insert')
        ->middleware('UserMiddleware')->name('do-insert');

    Route::get('/admin/insert/slider','AdminController@showSliderInsertForm')
        ->middleware('UserMiddleware')->name('showSliderFomr');
    Route::post('/admin/insert/slider','AdminController@doInsertSlider')
        ->middleware('UserMiddleware')->name('doInsertSlider');

    Route::get('/admin/delete/slider','AdminController@showAll')
        ->middleware('UserMiddleware')->name('showdeleteForm');
    Route::get('/admin/delete/slider/{id}','AdminController@deleteSliderImage')
        ->middleware('UserMiddleware')->name('deleteSliderImg');

    Route::get('/admin/delete/products','AdminController@showProducts')
        ->middleware('UserMiddleware')->name('showProductForm');
    Route::get('/admin/delete/products/{id}','AdminController@deleteProducts')
        ->middleware('UserMiddleware')->name('deleteProd');


    Route::get('/admin/update/products','AdminController@showUpdateForm')
        ->middleware('UserMiddleware')->name('showUpdateForm');

    Route::get('/admin/update/products/{id}','AdminController@showUpdateOneForm')
        ->middleware('UserMiddleware')->name('updateOne');

    Route::post('/admin/update/products/{id}','AdminController@updateProduct')
        ->middleware('UserMiddleware')->name('update');




    Route::get('/admin/Orders','AdminController@showOrders')
        ->middleware('UserMiddleware')->name('orders');


    Route::get('/admin/user-activities','AdminController@activities')
        ->middleware('UserMiddleware')->name('activities');


    Route::get('/about','UnAuthorizedController@about')->name('about-me');





