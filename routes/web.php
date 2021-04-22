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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
// EmployeeController

Route::get('/add-employee', 'EmployeeController@index')->name('add.employee');
Route::post('insert-employee', 'EmployeeController@store');
Route::get('/all-employee', 'EmployeeController@AllEmployee')->name('all.employee');
Route::get('/view-employee/{id}', 'EmployeeController@ViewEmployee');
Route::get('/delete-employee/{id}', 'EmployeeController@DeleteEmployee');
Route::get('/edit-employee/{id}', 'EmployeeController@EditEmployee');
Route::post('update-employee/{id}', 'EmployeeController@UpdateEmployee');

// CustomerController
Route::get('/add-customer', 'CustomerController@index')->name('add.customer');
Route::post('insert-customer', 'CustomerController@store');
Route::get('/all-customer', 'CustomerController@AllCustomer')->name('all.customer');
Route::get('/view-customer/{CustomerId}', 'CustomerController@ViewCustomer');
Route::get('/delete-customer/{CustomerId}', 'CustomerController@DeleteCustomer');
Route::get('/edit-customer/{CustomerId}', 'CustomerController@EditCustomer');
Route::post('update-customer/{CustomerId}', 'CustomerController@UpdateCustomer');

// Supplier
Route::get('/add-supplier', 'SupplierController@index')->name('add.supplier');
Route::post('insert-supplier', 'SupplierController@store');
Route::get('/all-supplier', 'SupplierController@AllSupplier')->name('all.supplier');
Route::get('/view-Supplier/{SupplierId}', 'SupplierController@ViewSupplier');
Route::get('/delete-supplier/{SupplierId}', 'SupplierController@DeleteSupplier');
Route::get('/edit-supplier/{SupplierId}', 'SupplierController@EditSupplier');

//salary
Route::get('/add-salary', 'SalaryController@index')->name('add.salary');
Route::post('insert-salary', 'SalaryController@store');
Route::get('/all-salary', 'SalaryController@AllSalary')->name('all.salary');
