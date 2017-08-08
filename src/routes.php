<?php

Route::get('calculator','myservice\calculator\CalculatorController@add');
Route::group(array('namespace'=>'myservice\calculator'),function(){
	Route::get('anwar','CalculatorController@subtract');
});