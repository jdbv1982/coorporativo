<?php

    Route::get('insertar/pedimentos', ['as'=>'insertar-pedimentos', 'uses'=>'PedimentoController@insertarPedimento']);
    Route::post('pedimentos', array('uses'=>'PedimentoController@setPedimentos'));
    Route::post('articulos', array('uses'=>'PedimentoController@setArticulos'));

    Route::post('upload', array('uses'=>'PedimentoController@uploadArchivo'));