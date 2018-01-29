<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class Pages extends Controller
{
    public function main()
    {
      $courses = Course::get(['id','course']);
      return view('main')->with('courses',$courses);
   }
   public function getForms($name)
   {
      //return $name;
       return view('forms.'.$name);
   }
}
