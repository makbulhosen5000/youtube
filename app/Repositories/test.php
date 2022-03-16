<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Facade;

class Test extends Facade{
   protected static function getFacadeAccessor (){
       return 'sum'; //this sum from app()->bind('sum') in SumServiceProvider register method;
   }
}


?>
