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

/* ============================================================
 * Calling Classes to use within the routes.php
 * ============================================================
 * the use App\ uses the classes for User and Address
 * There, we can set up relationships between
 * a user and an address
 *
 * */
use App\User;
use App\Address;

Route::get('/', function () {
    return view('welcome');
});
/* ============================================================
 * One to One Relationship CRUD
 * ============================================================
 * Using the insert name for the route,
 * I am instantiating the Address object using an
 * associative array and saving the address for
 * user 1 using findOrFail() that finds the id or fails trying
 * ============================================================
 * */
Route::get('/insert', function () {
    $user = User::findOrFail(1);
    // associative array instantiating a new object from the address
    $address = new Address(['name'=>'9876 Dale Mabry Ave Tampa FL 33612']);
    // now that the address variable is instantiated and has data,
    // let's save that address for user one
    // store that data in a user variable
    $user->address()->save($address);
});