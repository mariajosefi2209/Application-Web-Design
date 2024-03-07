<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model; 

class Hello extends Model 
{ 
  public static function helloWorldMessage() 
  { 
    return "HELLO WORLD!"; 
  }

  public static function nombreMessage()
  {
    return "María José";
  }

} 
