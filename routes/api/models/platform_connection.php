<?php

use Illuminate\Support\Facades\Route;

Route::get('policies', 'PlatformConnectionController@policies')
	->name('policies');

Route::get('policy', 'PlatformConnectionController@policy')
	->name('policy');

Route::get('index', 'PlatformConnectionController@index')
	->name('index');

Route::get('show', 'PlatformConnectionController@show')
	->name('show');

Route::post('create', 'PlatformConnectionController@create')
	->name('create');

Route::put('update', 'PlatformConnectionController@update')
	->name('update');

Route::delete('delete', 'PlatformConnectionController@delete')
	->name('delete');

Route::post('restore', 'PlatformConnectionController@restore')
	->name('restore');

Route::delete('force-delete', 'PlatformConnectionController@forceDelete')
	->name('force.delete');

Route::post('export', 'PlatformConnectionController@export')
	->name('export');