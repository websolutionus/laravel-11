<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Notification extends Facade
{
   protected static function getFacadeAccessor()
   {
       return 'Notification';
   }
}

