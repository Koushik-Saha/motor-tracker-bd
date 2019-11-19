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

// =======================Route For Frontend===================
Route::group(['namespace' => 'frontend'], function(){
    Route::get('contacts','HomeController@contacts')->name('contacts');
    Route::get('about','HomeController@aboutUs')->name('about');
    Route::get('price','HomeController@price')->name('price');
    Route::get('/','HomeController@index')->name('/');
});

Auth::routes();

// Route::get('/dashboard', 'HomeController@index')->name('dashboard');
// Route::get('/logout',function(){
//     Auth::logout();
//     return redirect('/');
    
// });



// =======================Route For Backend===================
    Route::group(['middleware' =>'auth' , 'namespace' => 'backend'], function(){

    Route::get('/dashboard', 'HomePageController@index')->name('dashboard');
    
    // Route::get('home-page','HomePageController@index')->name('homePage');

    //==============slider==============
    Route::get('home-slider','HomePageController@slider')->name('homeSlider');
    Route::get('home-slider-add','HomePageController@sliderAdd')->name('sliderAdd');
    Route::post('home-slider-store','HomePageController@sliderStore')->name('sliderStore');
    Route::get('home-slider-delete/{id}','HomePageController@sliderDestroy')->name('sliderDestroy');
    //==============services==============
    Route::get('home-services','HomePageController@services')->name('homeServices');
    Route::get('home-services-add','HomePageController@servicesAdd')->name('servicesAdd');
    Route::post('home-services-store','HomePageController@servicesStore')->name('servicesStore');
    Route::post('home-services-delete/{id}','HomePageController@servicesDestroy')->name('servicesDestroy');
    //==============Client==============
    // Route::get('client-list','CategoryController@index')->name('categoryList');
    Route::get('home-clients-list','HomePageController@clients')->name('homeOurClients');
    Route::post('client-add','HomePageController@store')->name('clientStore');
    Route::get('home-clients-add','HomePageController@clientsAdd')->name('clientsAdd');



    //==============About==============
    Route::get('about-us','HomePageController@aboutUs')->name('aboutUs');
    Route::get('about-edit/{id}','HomePageController@aboutEdit')->name('aboutEdit');
    Route::post('about-update','HomePageController@aboutUpdate')->name('aboutUpdate');

    
    Route::post('client-delete/{id}','HomePageController@clientDestroy')->name('clientDelete');

    //==============package and price==============
    Route::get('package-list','HomePageController@packagelist')->name('package');
    Route::get('package-add','HomePageController@packageAdd')->name('packageAdd');
    Route::post('package-store','HomePageController@packageStore')->name('packageStore');
    Route::post('package-delete/{id}','HomePageController@packageDestroy')->name('packageDestroy');

    //==============Software==============
     Route::get('software-list','HomePageController@softwareList')->name('softwareList');
     Route::get('software-edit/{id}','HomePageController@softwareEdit')->name('softwareEdit');
     // Route::get('software-edit','HomePageController@softwareEdit')->name('softwareEdit');
     Route::post('software-update','HomePageController@softwareUpdate')->name('softwareUpdate');
    
});
