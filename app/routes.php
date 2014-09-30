<?php

//Route::get('/', function()
//{
	//$resultados = DB::select('select * from maeart');
	//print_r($resultados);
//});

Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);

require(__DIR__ . '\routes\utilerias.php');
