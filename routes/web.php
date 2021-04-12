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

use Illuminate\Support\Facades\Route;


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('home', function () {
    echo 'Welcome home ....';
});

Route::get('/', function () {
    echo '<a href="mypage">Mypage</a><br>';
    echo '<a href="orders">Orders</a><br>';
});

Route::get('test', function () {
    echo '<form action="test" method="POST">';
	echo '<input type="submit" name="lähetys">';
	echo '<input type="hidden" name="_token" value="'.csrf_token().'" >';
	echo '<input type="hidden" name="_method" value="PUT" >';
	echo '</form>';
});

Route::get('customer/{id}', function ($id) {
    $customers = App\Customer::find($id);
    echo "My name is ". $customers->name ."<br />";
    $orders = $customers->orders;
    foreach($orders as $order){
        echo $order->name . "<br />";
    } 
});

Route::post('test', function () {
    echo 'POST';
});

Route::put('test', function () {
    echo 'PUT';
});

Route::delete('test', function () {
    echo 'DELETE';
});

Route::get('get_customer', function() {
    $customer = App\Customer::where('name','=','manu')->first();
    echo $customer->id;
});

Route::get('orders', function () {
    $orders = App\Order::all();
    foreach($orders as $order) {
        echo $order->name . " ordered by " . $order->customer->name . '<br/>';
    }

});

Route::get('mypage', function(){
    $customers = App\Customer::all();
    $data = array('customers' => $customers);

    return view('mypage',$data);
});