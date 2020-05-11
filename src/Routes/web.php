<?php

// Admin
Route::get('/admin/test', 'Platform\Test\Controllers\TestController@admin')->name('admin.panel');

// Regular
Route::get('/test', 'Platform\Test\Controllers\TestController@test');