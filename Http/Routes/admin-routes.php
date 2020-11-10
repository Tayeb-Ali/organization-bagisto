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
        Route::get('/', 'DOCore\Organization\Http\Controllers\Admin\OrganizationController@index')
            ->defaults('_config', ['view' => 'organization::admin.index'])->name('admin.organization.index');

        Route::post('/select-company', 'DOCore\Organization\Http\Controllers\Admin\OrganizationController@selectMainCompany')
            ->defaults('_config', ['redirect' => 'admin.organization.index'])->name('admin.organization.select-company');

    });
});

//Company
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

//sup-Company
    Route::prefix('admin/organization/company')->group(function () {
        Route::get('/sub/', 'SubCompanyController@index')->defaults('_config',
            ['view' => 'organization::admin.sub-company.inde`x'])->name('admin.sub_company.index');
        Route::get('/sub/edit/{id}', 'SubCompanyController@edit')->defaults('_config',
            ['view' => 'organization::admin.sub-company.add'])->name('admin.sub_company.edit');
        Route::post('sub/edit/{id}', 'SubCompanyController@update')->defaults('_config', ['redirect' => 'admin.sub_company.index'])->name('admin.sub_company.update');
        Route::delete('sub/delete/{id}', 'SubCompanyController@delete')->defaults('_config', ['redirect' => 'admin.sub_company.index'])->name('admin.sub_company.delete');
    });
});
//CompanyBranch
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
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
//client
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
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
//group
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
    Route::prefix('admin/organization/group')->group(function () {
        Route::get('/', 'GroupController@index')->defaults('_config', ['view' => 'organization::admin.group.index'])->name('admin.group.index');
        Route::get('/show/{id}', 'GroupController@show')->defaults('_config', ['view' => 'organization::admin.group.show'])->name('admin.group.show');
        Route::get('/create', 'GroupController@create')->defaults('_config', ['view' => 'organization::admin.group.create'])->name('admin.group.create');
        Route::post('/create', 'GroupController@store')->defaults('_config', ['redirect' => 'admin.group.index'])->name('admin.group.store');
        Route::get('/edit/{id}', 'GroupController@edit')->defaults('_config', ['view' => 'organization::admin.group.edit'])->name('admin.group.edit');
        Route::post('/edit/{id}', 'GroupController@update')->defaults('_config', ['redirect' => 'admin.group.index'])->name('admin.group.update');
        Route::delete('/delete/{id}', 'GroupController@delete')->defaults('_config', ['redirect' => 'admin.group.index'])->name('admin.group.delete');
    });
});
//supplier
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
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
//Employ
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
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
//Bank
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
    Route::prefix('admin/organization/bank')->group(function () {
        Route::get('/', 'BankController@index')
            ->defaults('_config', ['view' => 'organization::admin.bank.index'])->name('admin.bank.index');
        Route::get('/show/{id}', 'BankController@show')
            ->defaults('_config', ['view' => 'organization::admin.bank.show'])->name('admin.bank.show');
        Route::get('/create', 'BankController@create')
            ->defaults('_config', ['view' => 'organization::admin.bank.create'])->name('admin.bank.create');
        Route::post('/create', 'BankController@store')
            ->defaults('_config', ['redirect' => 'admin.bank.index'])->name('admin.bank.store');
        Route::get('/edit/{id}', 'BankController@edit')
            ->defaults('_config', ['view' => 'organization::admin.bank.edit'])->name('admin.bank.edit');
        Route::post('/edit/{id}', 'BankController@update')
            ->defaults('_config', ['redirect' => 'admin.bank.index'])
            ->name('admin.bank.update');
        Route::delete('/delete/{id}', 'BankController@delete'
        )->defaults('_config', ['redirect' => 'admin.bank.index'])->name('admin.bank.delete');
    });
});
//Store
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
    Route::prefix('admin/organization/store')->group(function () {
        Route::get('/', 'StoreController@index')
            ->defaults('_config', ['view' => 'organization::admin.store.index'])->name('admin.store.index');
        Route::get('/show/{id}', 'StoreController@show')
            ->defaults('_config', ['view' => 'organization::admin.store.show'])->name('admin.store.show');
        Route::get('/create', 'StoreController@create')
            ->defaults('_config', ['view' => 'organization::admin.store.create'])->name('admin.store.create');
        Route::post('/create', 'StoreController@store')
            ->defaults('_config', ['redirect' => 'admin.store.index'])->name('admin.store.store');
        Route::get('/edit/{id}', 'StoreController@edit')
            ->defaults('_config', ['view' => 'organization::admin.store.edit'])->name('admin.store.edit');
        Route::post('/edit/{id}', 'StoreController@update')
            ->defaults('_config', ['redirect' => 'admin.store.index'])
            ->name('admin.bank.update');
        Route::delete('/delete/{id}', 'StoreController@delete'
        )->defaults('_config', ['redirect' => 'admin.store.index'])->name('admin.store.delete');
    });
});
//Theasur
Route::group(['namespace' => 'DOCore\Organization\Http\Controllers\Admin', 'middleware' => ['web', 'admin', 'company']], function () {
    Route::prefix('admin/organization/treasur')->group(function () {
        Route::get('/', 'TreasureController@index')
            ->defaults('_config', ['view' => 'organization::admin.treasur.index'])->name('admin.treasur.index');
        Route::get('/show/{id}', 'TreasureController@show')
            ->defaults('_config', ['view' => 'organization::admin.treasur.show'])->name('admin.treasur.show');
        Route::get('/create', 'TreasureController@create')
            ->defaults('_config', ['view' => 'organization::admin.treasur.create'])->name('admin.treasur.create');
        Route::post('/create', 'TreasureController@store')
            ->defaults('_config', ['redirect' => 'admin.treasur.index'])->name('admin.treasur.store');
        Route::get('/edit/{id}', 'TreasureController@edit')
            ->defaults('_config', ['view' => 'organization::admin.treasur.edit'])->name('admin.treasur.edit');
        Route::post('/edit/{id}', 'TreasureController@update')
            ->defaults('_config', ['redirect' => 'admin.treasur.index'])
            ->name('admin.bank.update');
        Route::delete('/delete/{id}', 'TreasureController@delete'
        )->defaults('_config', ['redirect' => 'admin.treasur.index'])->name('admin.treasur.delete');
    });
});


