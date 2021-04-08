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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Frontend\FrontendController@index')->name('index');
Route::get('ibch', 'Frontend\FrontendController@ibch')->name('ibch');
Route::get('ibmoh', 'Frontend\FrontendController@ibmoh')->name('ibmoh');
Route::get('at_glance', 'Frontend\FrontendController@atglance')->name('atglance');
Route::get('foundation_committee', 'Frontend\FrontendController@foundationcommittee')->name('foundationcommittee');
Route::get('executive_committee', 'Frontend\FrontendController@executivecommittee')->name('executivecommittee');
Route::get('audit_committee', 'Frontend\FrontendController@auditcommittee')->name('auditcommittee');
Route::get('hospital_committee', 'Frontend\FrontendController@hospitalcommittee')->name('hospitalcommittee');
Route::get('education_committee', 'Frontend\FrontendController@educationcommittee')->name('educationcommittee');
Route::get('contact', 'Frontend\FrontendController@contact')->name('contact');
Route::get('etender', 'Frontend\FrontendController@etender')->name('etender');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/employee', 'HomeController@index')->name('home.employee');*/

Route::group(['middleware'=>'auth'],function (){
    Route::prefix ('users')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });
    Route::prefix ('profiles')->group (function () {
        //sliders
        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


    });
    Route::prefix ('logos')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
        Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
        Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
        Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
        Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
        Route::post('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
    });
    Route::prefix ('sliders')->group (function () {
        //slider
        Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
        Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
        Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
        Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
        Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
        Route::post('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
    });
    Route::prefix ('etenders')->group (function () {
        //slider
        Route::get('/view', 'Backend\EtenderController@view')->name('etenders.view');
        Route::get('/add', 'Backend\EtenderController@add')->name('etenders.add');
        Route::post('/store', 'Backend\EtenderController@store')->name('etenders.store');
        Route::get('/edit/{id}', 'Backend\EtenderController@edit')->name('etenders.edit');
        Route::post('/update/{id}', 'Backend\EtenderController@update')->name('etenders.update');
        Route::post('/delete/{id}', 'Backend\EtenderController@delete')->name('etenders.delete');
        Route::post('/download', 'Backend\EtenderController@download')->name('etenders.download');
    });

});
