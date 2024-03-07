<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Hello; // Import the model

class HelloWorld extends Controller 
{ 
  public function sayHello() 
  { 
    return view('hello', ["message" => Hello::helloWorldMessage(), 
    "name" => Hello::nameMessage()]);
  }
} 

