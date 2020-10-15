<?php
/*
|--------------------------------------------------------------------------
| Admin Routes For organization
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization')->group(function () {
        Route::get('/', 'DOCore\Organization\Http\Controllers\Admin\OrganizationController@index')->defaults('_config', ['view' => 'organization::admin.index'])->name('admin.organization.index');
    });
});


Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/company')->group(function () {
        Route::get('/', 'CompanyController@index')->defaults('_config', ['view' => 'organization::admin.company.index'])->name('admin.company.index');
        Route::get('/show/{id}', 'CompanyController@show')->defaults('_config', ['view' => 'organization::admin.company.show'])->name('admin.company.show');
        Route::get('/create', 'CompanyController@create')->defaults('_config', ['view' => 'organization::admin.company.create'])->name('admin.company.create');
        Route::post('/create', 'CompanyController@store')->defaults('_config', ['redirect' => 'admin.company.index'])->name('admin.company.store');
        Route::get('/edit/{id}', 'CompanyController@edit')->defaults('_config', ['view' => 'organization::admin.company.edit'])->name('admin.company.edit');
        Route::post('/edit/{id}', 'CompanyController@update')->defaults('_config', ['redirect' => 'admin.company.index'])->name('admin.company.update');
        Route::delete('/delete/{id}', 'CompanyController@delete')->defaults('_config', ['redirect' => 'admin.company.index'])->name('admin.company.delete');
    });

    Route::prefix('admin/organization/company')->group(function () {
        Route::get('/sub/', 'SubCompanyController@index')->defaults('_config',
            ['view' => 'organization::admin.sub-company.index'])->name('admin.sub_company.index');
        Route::get('/sub/edit/{id}', 'SubCompanyController@edit')->defaults('_config',
            ['view' => 'organization::admin.sub-company.add'])->name('admin.sub_company.edit');
        Route::post('sub/edit/{id}', 'SubCompanyController@update')->defaults('_config', ['redirect' => 'admin.sub_company.index'])->name('admin.sub_company.update');
    });
});


Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/company-branch')->group(function () {
        Route::get('/', 'CompanyBranchController@index')->defaults('_config', ['view' => 'organization::admin.company-branch.index'])->name('admin.company-branch.index');
        Route::get('/show/{id}', 'CompanyBranchController@show')->defaults('_config', ['view' => 'organization::admin.company-branch.show'])->name('admin.company-branch.show');
        Route::get('/create', 'CompanyBranchController@create')->defaults('_config', ['view' => 'organization::admin.company-branch.create'])->name('admin.company-branch.create');
        Route::post('/create', 'CompanyBranchController@store')->defaults('_config', ['redirect' => 'admin.company-branch.index'])->name('admin.company-branch.store');
        Route::get('/edit/{id}', 'CompanyBranchController@edit')->defaults('_config', ['view' => 'organization::admin.company-branch.edit'])->name('admin.company-branch.edit');
        Route::post('/edit/{id}', 'CompanyBranchController@update')->defaults('_config', ['redirect' => 'admin.company-branch.index'])->name('admin.company-branch.update');
        Route::delete('/delete/{id}', 'CompanyBranchController@delete')->defaults('_config', ['redirect' => 'admin.company-branch.index'])->name('admin.company-branch.delete');
    });
});


Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/client')->group(function () {
        Route::get('/', 'ClientController@index')->defaults('_config', ['view' => 'organization::admin.client.index'])->name('admin.client.index');
        Route::get('/show/{id}', 'ClientController@show')->defaults('_config', ['view' => 'organization::admin.client.show'])->name('admin.client.show');
        Route::get('/create', 'ClientController@create')->defaults('_config', ['view' => 'organization::admin.client.create'])->name('admin.client.create');
        Route::post('/create', 'ClientController@store')->defaults('_config', ['redirect' => 'admin.client.index'])->name('admin.client.store');
        Route::get('/edit/{id}', 'ClientController@edit')->defaults('_config', ['view' => 'organization::admin.client.edit'])->name('admin.client.edit');
        Route::post('/edit/{id}', 'ClientController@update')->defaults('_config', ['redirect' => 'admin.client.index'])->name('admin.client.update');
        Route::delete('/delete/{id}', 'ClientController@delete')->defaults('_config', ['redirect' => 'admin.client.index'])->name('admin.client.delete');
    });
});


Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/client-group')->group(function () {
        Route::get('/', 'ClientGroupController@index')->defaults('_config', ['view' => 'organization::admin.client-group.index'])->name('admin.client-group.index');
        Route::get('/show/{id}', 'ClientGroupController@show')->defaults('_config', ['view' => 'organization::admin.client-group.show'])->name('admin.client-group.show');
        Route::get('/create', 'ClientGroupController@create')->defaults('_config', ['view' => 'organization::admin.client-group.create'])->name('admin.client-group.create');
        Route::post('/create', 'ClientGroupController@store')->defaults('_config', ['redirect' => 'admin.client-group.index'])->name('admin.client-group.store');
        Route::get('/edit/{id}', 'ClientGroupController@edit')->defaults('_config', ['view' => 'organization::admin.client-group.edit'])->name('admin.client-group.edit');
        Route::post('/edit/{id}', 'ClientGroupController@update')->defaults('_config', ['redirect' => 'admin.client-group.index'])->name('admin.client-group.update');
        Route::delete('/delete/{id}', 'ClientGroupController@delete')->defaults('_config', ['redirect' => 'admin.client-group.index'])->name('admin.client-group.delete');
    });
});


Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/supplier')->group(function () {
        Route::get('/', 'SupplierController@index')->defaults('_config', ['view' => 'organization::admin.supplier.index'])->name('admin.supplier.index');
        Route::get('/show/{id}', 'SupplierController@show')->defaults('_config', ['view' => 'organization::admin.supplier.show'])->name('admin.supplier.show');
        Route::get('/create', 'SupplierController@create')->defaults('_config', ['view' => 'organization::admin.supplier.create'])->name('admin.supplier.create');
        Route::post('/create', 'SupplierController@store')->defaults('_config', ['redirect' => 'admin.supplier.index'])->name('admin.supplier.store');
        Route::get('/edit/{id}', 'SupplierController@edit')->defaults('_config', ['view' => 'organization::admin.supplier.edit'])->name('admin.supplier.edit');
        Route::post('/edit/{id}', 'SupplierController@update')->defaults('_config', ['redirect' => 'admin.supplier.index'])->name('admin.supplier.update');
        Route::delete('/delete/{id}', 'SupplierController@delete')->defaults('_config', ['redirect' => 'admin.supplier.index'])->name('admin.supplier.delete');
    });
});


Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/supplier-group')->group(function () {
        Route::get('/', 'SupplierGroupController@index')->defaults('_config', ['view' => 'organization::admin.supplier-group.index'])->name('admin.supplier-group.index');
        Route::get('/show/{id}', 'SupplierGroupController@show')->defaults('_config', ['view' => 'organization::admin.supplier-group.show'])->name('admin.supplier-group.show');
        Route::get('/create', 'SupplierGroupController@create')->defaults('_config', ['view' => 'organization::admin.supplier-group.create'])->name('admin.supplier-group.create');
        Route::post('/create', 'SupplierGroupController@store')->defaults('_config', ['redirect' => 'admin.supplier-group.index'])->name('admin.supplier-group.store');
        Route::get('/edit/{id}', 'SupplierGroupController@edit')->defaults('_config', ['view' => 'organization::admin.supplier-group.edit'])->name('admin.supplier-group.edit');
        Route::post('/edit/{id}', 'SupplierGroupController@update')->defaults('_config', ['redirect' => 'admin.supplier-group.index'])->name('admin.supplier-group.update');
        Route::delete('/delete/{id}', 'SupplierGroupController@delete')->defaults('_config', ['redirect' => 'admin.supplier-group.index'])->name('admin.supplier-group.delete');
    });
});

//Employ
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/employ')->group(function () {
        Route::get('/', 'EmployController@index')->defaults('_config', ['view' => 'organization::admin.employ.index'])->name('admin.employ.index');
        Route::get('/show/{id}', 'EmployController@show')->defaults('_config', ['view' => 'organization::admin.employ.show'])->name('admin.employ.show');
        Route::get('/create', 'EmployController@create')->defaults('_config', ['view' => 'organization::admin.employ.create'])->name('admin.employ.create');
        Route::post('/create', 'EmployController@store')->defaults('_config', ['redirect' => 'admin.employ.index'])->name('admin.employ.store');
        Route::get('/edit/{id}', 'EmployController@edit')->defaults('_config', ['view' => 'organization::admin.employ.edit'])->name('admin.employ.edit');
        Route::post('/edit/{id}', 'EmployController@update')->defaults('_config', ['redirect' => 'admin.employ.index'])->name('admin.employ.update');
        Route::delete('/delete/{id}', 'EmployController@delete')->defaults('_config', ['redirect' => 'admin.employ.index'])->name('admin.employ.delete');
    });
});

//EmployGroup
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin']], function () {
    Route::prefix('admin/organization/employ-group')->group(function () {
        Route::get('/', 'EmployGroupController@index')->defaults('_config', ['view' => 'organization::admin.employ-group.index'])->name('admin.employ-group.index');
        Route::get('/show/{id}', 'EmployGroupController@show')->defaults('_config', ['view' => 'organization::admin.employ-group.show'])->name('admin.employ-group.show');
        Route::get('/create', 'EmployGroupController@create')->defaults('_config', ['view' => 'organization::admin.employ-group.create'])->name('admin.employ-group.create');
        Route::post('/create', 'EmployGroupController@store')->defaults('_config', ['redirect' => 'admin.employ-group.index'])->name('admin.employ-group.store');
        Route::get('/edit/{id}', 'EmployGroupController@edit')->defaults('_config', ['view' => 'organization::admin.employ-group.edit'])->name('admin.employ-group.edit');
        Route::post('/edit/{id}', 'EmployGroupController@update')->defaults('_config', ['redirect' => 'admin.employ-group.index'])->name('admin.employ-group.update');
        Route::delete('/delete/{id}', 'EmployGroupController@delete')->defaults('_config', ['redirect' => 'admin.employ-group.index'])->name('admin.employ-group.delete');
    });
});
