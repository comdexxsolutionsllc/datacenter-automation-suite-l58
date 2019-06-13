<?php

use Aschmelyun\Larametrics\Larametrics;

Horizon::auth(function () {
    return true;
});

Larametrics::routes();

Route::get('/', 'HomeController@employeeIndex')->name('home.employee');

Route::patch('/about-us/{employee}', 'AboutUsController@update')->name('aboutus.update');

Route::get('/about-us/{employee}/edit', 'AboutUsController@edit')->name('aboutus.edit');
