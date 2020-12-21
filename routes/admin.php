<?php

use \Illuminate\Support\Facades\Route;
Route::get('/admin', function () {
    return "<h1 style='text-align: center'>page Admin</h1>";
});

Route::get('/admin/test', function () {
    return "<h1 style='text-align: center'>page Admin test</h1>";
});


Route::namespace('Front')->group(function (){
    Route::get('admin/users','UserController@showAdminName');
});


