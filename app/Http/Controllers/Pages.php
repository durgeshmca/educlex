<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class Pages extends Controller
{
    public function main()
    {
      return view('main')->with('courses',$courses);
   }
   public function getForms($name)
   {
      //return $name;
       return view('forms.'.$name);
   }
}
