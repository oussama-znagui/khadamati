<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('clientProfile', function () {
    return view('client.profile');
});

Route::get('addJob', function () {
    return view('client.postJob');
});

Route::get('login', function () {
    return view('Auth.login');
});

Route::get('favorie', function () {
    return view('client.favorie');
});

Route::get('history', function () {
    return view('client.history');
});