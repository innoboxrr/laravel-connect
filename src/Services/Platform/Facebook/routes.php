<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'facebook'], function () {
    
    Route::get('test', function () {
        return response()->json(['message' => 'Facebook service is working!']);
    })->name('facebook.test');

});