<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return view('BackEnd.index');
});

Route::get('/teachers', 'BackEnd\TeachersController@index');


