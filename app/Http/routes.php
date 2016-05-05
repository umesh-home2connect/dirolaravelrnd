<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::group(['middleware' => ['web']], function () {
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('bucket_test','couchbase_test@bucket_test');
//Route::get('login','couchbase_test@login');
//Route::post('bucket_test','couchbase_test@bucket_test');
//Route::resource('users', 'user_auth');
//});


Route::group(['middleware' => ['web']], function () {
                        
    Route::get('/', function () {
     return view('welcome');
    });
    
    Route::get('/','Server@deploy');
    Route::get('dataview/','Server@dataview');
    Route::get('bucket_test','couchbase_test@bucket_test');
    Route::get('login','couchbase_test@login');
    Route::post('bucket_test','couchbase_test@bucket_test');
    Route::resource('users', 'user_auth');
    Route::get('user_profile','UserProfileController@user_profile');
    Route::post('user_profile','UserProfileController@user_profile');
//    Route::post('excel','UserProfileController@excel');
    
    if (file_exists(__DIR__.'/controllers/Server.php')) {
	    Route::get('/deploy', 'Server@deploy');
    }
    
    Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);

//    Route::get('diro_home','Diro_homeController@index');
//    
    
    
//    Route::group(['namespace' => 'Admin'], function()
//            {
//                Route::get('/admin', 'AdminController@index');
////                Route::get('/admin/create', 'AdminController@create');
////                Route::post('/admin', 'AdminController@store');
////                Route::get('/admin/test', 'AdminController@test');
//
//            });
//    Route::group(['namespace' => 'User'], function() 
//            {
//
//                Route::get('/user_profile','User_profileController@index');
//                Route::post('/user_profile','User_profileController@index');
//            });
            
//    Route::group(['namespace' => 'Diro_home'],function()
//            {
//        
//                Route::get('/diro_home','Diro_homeController@index');
//                Route::post('/diro_home','Diro_homeController@index');
//        
//            });   
//      Route::get('diro_home','Diro_homeDiro_homeController@index');

//    Route::resource('demo','DemoController');  //Since we’re using Route::resource, we get index, show, create, edit, update, store, and destroy routes defined for us.
//    Route::get('/tasks', 'TaskController@index');
//    Route::post('/task', 'TaskController@store');
//    Route::delete('/task/{task}', 'TaskController@destroy');
//    Route::get('fileentry', 'FileEntryController@index');
//    Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
//    Route::post('fileentry/add',['as' => 'addentry', 'uses' => 'FileEntryController@add']); 
//    Route::get('fileentry/delete/{filename}',['as' => 'deleteentry', 'uses' => 'FileEntryController@delete']);
//    Route::get('/pdf', 'PdfController@invoice');
//    Route::get('/home','HomeController@index');
//    Route::post('/home','HomeController@postChangeLanguage');
});