<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\FormSetting;
class Pages extends Controller
{
    public function main()
    {
      $courses = Course::get(['id','course']) ;
      $formList = FormSetting::get(['id','status']);
      return view('main')->with('courses',$courses)->with('formList',$formList);
   }
   public function getForms($name)
   {
      //return $name;
       return view('forms.'.$name);
   }
}
