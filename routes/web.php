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


// client handling
Route::get('/', 'ClientSideController@index');
Route::get('/SalesViewData/{id}', 'ClientSideController@SalesViewData');
Route::get('/ApartmentViewData/{id}', 'ClientSideController@ApartmentViewData');

// emails 
Route::post('/inquireData', 'EmailController@inquireData');
Route::post('/saleData', 'EmailController@saleData');
Route::post('/apartmentData', 'EmailController@apartmentData');

// all sales and apartment 
Route::get('/all_saleapartment', 'ClientSideController@allsaleapartment');
Route::get('/all_rentapartment', 'ClientSideController@allrentapartment');



//Admin Routes
Route::get('/adminLogin', 'adminLoginController@AdminLogin'); 

Route::get('refresh_captcha', 'adminLoginController@refreshCaptcha'); 
Route::post('cutomlogin', 'frontendController@CustomLogin'); 
Route::get('rental-information', 'HomeController@RentalInformation'); 
Route::post('newrental', 'HomeController@NewRental'); 
Route::get('edit-rental/{idd}', 'HomeController@EditRental');
Route::post('update-rental', 'HomeController@UpdateRental'); 
Route::get('deleterental/{id}', 'HomeController@Deleterental'); 

Route::get('sale-information', 'HomeController@SaleInformation'); 
Route::post('newsale', 'HomeController@NewSale'); 
Route::get('edit-sale/{idd}', 'HomeController@EditSale');
Route::post('update-sale', 'HomeController@UpdateSale');
Route::get('deletesale/{id}', 'HomeController@Deletesale'); 
Route::post('newNews', 'HomeController@newNews');  
Route::get('news', 'HomeController@News');  
Route::get('newsEdit/{id}', 'HomeController@NewsEdit');  
Route::get('addnewNews', 'HomeController@addnewNews'); 
Route::post('submitNewNews', 'HomeController@submitNewNews'); 
Route::get('deleteNews/{id}', 'HomeController@deleteNews'); 
Route::post('updateNews/{id}', 'HomeController@updateNews'); 

//Sale Routes
Route::get('sale-mansion/{name}/{name1}', 'saleController@saleMansion');
Route::get('sale-mansions/{name}', 'saleController@saleMansions');
Route::get('locationFilter-sale/{id}', 'saleController@LocationFilterSale'); 
Route::post('filterData-mansion', 'saleController@filterDataMansion');
Route::post('filterdatalocation', 'saleController@Filterdatalocation');

Route::post('filterdatamansion', 'frontendController@FilterdataMansion'); 
Route::post('filterdatarental', 'frontendController@FilterdataRental'); 
Route::post('filterLocationRental', 'frontendController@filterLocationRental');

