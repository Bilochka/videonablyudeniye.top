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
//
//Route::get('/', function () {
//    return view('welcome');
//});








//Route::group(['middleware'=>'web'], function (){
Route::group([], function (){
    Route::match(['get','post'],'/',['uses'=>'IndexController@index','as'=>'home']);
    Route::auth();
});



// admin/service
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){
    //admin
//    Route::get('/', function () {
//
//        if(view()->exists('admin.index')){
//            $data = ['title' => 'Панель Адміністратора'];
//            return view('admin.index', $data);
//        }
//    });
    Route::get('/',['uses'=>'InvoiceController@index','as'=>'invoice']);

//    // admin/pages
//    Route::group(['prefix'=>'pages'], function (){
//        // admin/pages
//        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
//        // admin/pages/add
//        Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
//        // admin/pages/edit/2
//        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
//
//    });

    Route::group(['prefix'=>'catalog'],function() {


        Route::get('/',['uses'=>'CatalogController@index','as'=>'catalog']);
        Route::get('/create',['uses'=>'CatalogController@create','as'=>'catalog.create']);
        Route::post('/store',['uses'=>'CatalogController@store','as'=>'catalog.store']);
        Route::get('/{id}/edit',['uses'=>'CatalogController@edit','as'=>'catalog.edit']);
        Route::put('/{id}/update',['uses'=>'CatalogController@update','as'=>'catalog.update']);


//        Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);
//
//        Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfolioEditController@execute','as'=>'portfolioEdit']);

    });



});

Auth::routes();

Route::post('/home', 'HomeController@execute')->name('home2');
