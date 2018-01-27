<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function main()
    {
      return view('main');
   }
   public function getForms($name)
   {
      //return $name;
       return view('forms.'.$name);
   }
}
