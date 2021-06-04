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
Route::pattern('domain', '[a-z0-9.\]+');
Route::domain('{domain}')->group(function() {
    Route::get('users/{user}', function (Request $request, string $domain, User $user) {
        // Your code here
    });
});
Route::get('/', function () {
    return view('welcome');
});
