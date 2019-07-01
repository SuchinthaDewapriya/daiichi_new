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
 
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/rental_category', function () {
    return view('rental_category');
});
Route::get('/mansion', function () {
    return view('mansion');
});
Route::get('/system', function () {
    return view('system');
});
Route::get('/town_sakura', function () {
    return view('town_sakura');
});
Route::get('/town_shisui', function () {
    return view('town_shisui');
});
Route::get('/link', function () {
    return view('link');
});
Route::get('/access', function () {
    return view('access');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/inquire', function () {
    return view('inquire');
});

Route::get('/', 'ClientSideController@index');
Route::get('/SalesViewData/{id}', 'ClientSideController@SalesViewData');
Route::get('/ApartmentViewData/{id}', 'ClientSideController@ApartmentViewData');






// test
// Route::get('/sales', function () {
//     return view('includes.sales-slider');
// });