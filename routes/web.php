<?php
/* Public */
// extends Controller
Route::get('/', ['uses'=>'IndexController@index', 'as'=>'index']);

Route::get('/monitor', ['uses'=>'MonitorController@client', 'as'=>'monitorClient']);
/* Auth */
// for admin
Route::match(['get', 'post'], 'admin/monitor/{del?}', ['uses'=>'MonitorController@start', 'as'=>'monitor']);
