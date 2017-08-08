<?php

namespace myservice\calculator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
   public function add(){
   	return "hi I am from Calculator controller";
   }
  public function subtract(){
  	$result="20";
  	return view('calculator::add',compact('result'));
  }
}
