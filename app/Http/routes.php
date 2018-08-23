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

use App\User;
use App\Address;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function () {
    $user = User::findOrFail(1);
    // associative array instantiating a new object from the address
    $address = new Address(['name'=>'1234 Fletcher Ave Tampa FL 33612']);
    // now that the address variable is instantiated and has data, let's pull out the data
    // store that data in a user variable
    $user = address()->save($address);
});