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

//Main Menu
Route::get('/', 'UsersController@Menu');
Route::post('/', 'UsersController@check');

//For Users
Route::get('/register', 'UsersController@Reg');
Route::get('/login', 'UsersController@Login');
Route::post('/login', 'UsersController@insert');
Route::get('/logout', 'UsersController@logout');

Route::get('/Products/{id}', 'ProductController@ViewProduct');
Route::post('/Products/NewOrder', 'OrdersController@NewOrder');
Route::post('/Products/ConfirmOrder', 'OrdersController@Store');

Route::get('/User/cart', 'UsersController@indexCart');
Route::post('/User/cart/delete', 'UsersController@deleteItem');

Route::get('/User/Cart/NewOrder', 'OrdersController@NewOrder_Cart');
Route::post('/User/Cart/ConfirmOrder_cart', 'OrdersController@StoreCart');

Route::get('User/account', 'UsersController@accountInfo');
Route::post('User/account/Order', 'OrdersController@OrderInfo');

Route::get('User/account/changeAccount', 'UsersController@change');
Route::post('User/account/update', 'UsersController@update');

//For Admins
    Route::post('/admin', 'AdminController@check');
    Route::get('/admin/login', 'AdminController@login'); 

Route::group(['middleware' => ['adminMid']], function (){
    Route::get('/admin', 'AdminController@mainMenu');
    Route::get('/admin/logout', 'AdminController@logout'); 
    
//Product Menu for Admins
    Route::get('/admin/Products', 'AdminController@ProductView');
    Route::get('/admin/Products/list', 'AdminController@indexProd');

//For Updating Products
    Route::get('/admin/Products/Update/{id}', 'AdminController@Edit');
    Route::post('/admin/Products/list', 'AdminController@Update_prod');

//For Adding Products
    Route::get('/admin/Products/Add', 'AdminController@Add');
    Route::post('/admin/Products', 'AdminController@insert');

//For Deleting Products
    Route::get('/admin/Products/Delete/{id}', 'AdminController@Remove');

//For Reviewing all Users's Information
    Route::get('/admin/Users', 'AdminController@indexCustomers');
    Route::get('/admin/User/{id}', 'UsersController@indexCustomer');
    Route::get('/admin/User/{id}/Order/{order_id}', 'OrdersController@indexOrder');
});