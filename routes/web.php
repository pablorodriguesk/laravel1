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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('/usuarios', function () {
        $users = App\User::all();
        return view('users.list', ['users' => $users]);
    });

    Route::get('/hello', function () {
        return view('hello', ['name' => 'hello']);
    });
    Route::post('/hello', function () {
        $teste = $_POST['teste'];
        return view('hello', ['name' => 'hello', 'teste' => $teste]);
    });

    Route::get('/hello/{name}', function ($name) {
        return view('hello', ['name' => $name]);
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
