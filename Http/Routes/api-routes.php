<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API Routes

Route::group(['prefix' => 'api'], function ($router) {

    Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Api',
        'middleware' => ['locale', 'theme', 'currency']], function ($router) {
        Route::get('organization', 'OrganizationController@index')->defaults('_config', []);
        Route::get('organization/{id}', 'OrganizationController@get')->defaults('_config', []);
    });


    Route::get('company', 'CompanyApiController@index');
    Route::get('company/{id}', 'CompanyApiController@show');
});
