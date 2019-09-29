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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/', 'landing')->name('landing');

Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        
        
        //testing
        Route::get('/test', function () {
            dd(LaravelLocalization::getCurrentLocale());
        });
        
        
        Auth::routes();
        
        Route::get('/login-as', 'HomeController@loginAs')->name('login.as');
        
        Route::get('/home', 'HomeController@index')->name('home');
        
        
        Route::middleware('auth')->group(function () {
            //
            Route::prefix('admin')->group(function () {
                //
                //Dashboard
                //
                Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
                
                //
                // Settings
                //
                Route::prefix('settings')->group(function () {
                    //
                    // Users
                    //
                    Route::get('/users', 'UserController@index')->name('users');
                    //
                    // Roles
                    //
                    Route::get('roles', 'Settings\RoleController@index')->name('roles');
                    //
                    // Pages
                    //
                    Route::get('/pages', 'Settings\PageController@index')->name('pages');
                });
            });
            
            //
            /*Route::prefix('apiv1')->group(function () {
                // Clear cache
                Route::get('/cache', 'Settings\SettingController@cache')->name('cache');
                Route::get('/cache/config', 'Settings\SettingController@cacheConfig')->name('cache.config');
                Route::get('/cache/view', 'Settings\SettingController@cacheView')->name('cache.view');
                Route::get('/cache/routes', 'Settings\SettingController@cacheRoutes')->name('cache.routes');
                //
                Route::get('/composer/dump', 'Settings\SettingController@composerDump')->name('composer.dump');
                // DB
                Route::get('/db/refresh', 'Settings\SettingController@refreshDatabase')->name('db.refresh');
                //
                // Roles
                Route::get('settings/roles', 'Settings\RoleController@init');
                Route::post('settings/roles', 'Settings\RoleController@store');
            });*/
        });
    });
