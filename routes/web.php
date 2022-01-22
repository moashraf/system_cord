<?php
 
 
	
 /////////////////////////////////////////////////////////////////////////////////////////////////

Auth::routes();
 
/////////////////////////////////////////////////////////////////////////////////////////////////

/*
|--------------------------------------------------------------------------
|                   admin              admin 
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth', 'prefix' => 'site/admin'], function ()
{
    
    
    		Route::get('/add_data_sales', 'NEWSController@add_data_sales');
    		Route::get('/Invoice', 'NEWSController@Invoice');
    		Route::get('/Analytics/{Date?}', 'NEWSController@Analytics');
 
		Route::post('/system', 'NEWSController@orders')->name('system');
		Route::get('/system', 'NEWSController@getsystem');
		
		Route::get('/monthlyAccDisplay', 'NEWSController@monthlyAccDisplay');
		Route::get('/OneTime', 'NEWSController@OneTime');
		Route::get('/Ticket', 'NEWSController@Ticket');
		Route::get('/sendM', 'NEWSController@sendM');
		Route::get('/text', 'NEWSController@text');
		Route::get('/Domains_Servers', 'NEWSController@Domains_Servers');
		Route::get('/sales', 'NEWSController@sales');
		Route::get('/', 'NEWSController@sales');
        Route::post('/Domains_Servers_filter', 'NEWSController@Domains_Servers_filter')->name('Domains_Servers_filter');
       // Route::post('/export_post', 'NEWSController@export_post')->name('export_post');
        Route::post('/OneTime_filter', 'NEWSController@OneTime_filter')->name('OneTime_filter');
        Route::post('/monthly_Acc_filter', 'NEWSController@monthly_Acc_filter')->name('monthly_Acc_filter');
        
        
         Route::post('/export_file', 'NEWSController@export_file')->name('export_file');
          Route::get('/export_file', 'NEWSController@export_file');
        Route::get('/Domains_Servers_filter', 'NEWSController@Domains_Servers_filter') ;
        Route::get('/sales_filter_get', 'NEWSController@sales_filter_get') ->name('sales_filter_get');
        
        Route::get('/OneTime_filter', 'NEWSController@OneTime_filter') ;
        Route::get('/monthly_Acc_filter', 'NEWSController@monthly_Acc_filter') ;
    	Route::post('/sort_new', 'NEWSController@sort_new');
    	Route::post('/sort_cat', 'categories_newsController@sort_cat');
        Route::get('/sales1','home_Controller@sales');
        Route::post('/sale','home_Controller@sale')->name('good') ;
        Route::get('/allsales','home_Controller@allsales');
        
        Route::get('/editsales/{user_id}','home_Controller@editsales');
        Route::get('/deletesa/{user_id}','home_Controller@deletesa')->name('deletesa');
        Route::post('/updatesa','home_Controller@updatesa')->name('updatesa') ;
       // Route::post('/search', 'home_Controller@searchFunction')->name('search');

 Route::get('sup', 'categories_newsController@sup')->name('sup');


Route::get('ajax_del_products/{id}/{Product_id}', 'ProductsController@ajax_del_products');
Route::get('ajax_del_news_photo/{id}/{news_id}', 'NEWSController@ajax_del_news_photo');
Route::get('ajax_del_services_photo/{id}/{services_id}', 'servicesController@ajax_del_services_photo');
 Route::resource('services', 'servicesController');
Route::resource('categoriesServices', 'categories_servicesController');
Route::resource('products', 'ProductsController');
Route::resource('categoriesProducts', 'Categories_ProductsController');
Route::resource('siteStings', 'siteStingsController');
Route::resource('sliders', 'sliderController');
Route::resource('types', 'typesController');
Route::resource('nEWS', 'NEWSController');
Route::resource('categoriesNews', 'categories_newsController');
Route::get('categories_news_single/{id}', 'NEWSController@all_post');
//	Route::get('order_dlete', 'HomeController@order_dlete');

 Route::post('ckeditor/upload', 'NEWSController@upload')->name('ckeditor.upload');


Route::resource('clients', 'clientsController');
Route::resource('orders', 'orderController');
Route::resource('projects', 'projectsController');
Route::resource('projectsCats', 'projects_catController');
Route::resource('requests', 'requestController');
Route::resource('videos', 'videoController');
Route::resource('images', 'imageController');
Route::resource('openinghours', 'openinghoursController');



Route::post('/destroyComment', 'NEWSController@destroyComment')->name('destroyComment');

});


Route::get('/new-design', function () {
    return view('analytics-new');
});
/////////////////////////////////////////////////////////////////////////////////////////////////