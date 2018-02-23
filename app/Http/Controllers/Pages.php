<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Project;
use App\FormSetting;
use App\Section;
use App\Slider;
class Pages extends Controller
{
    public function main()
    {
      $courses = Course::get(['id','course']) ;
      $formList = FormSetting::get(['id','status']);
      $projects = Project::get();
      $sections = Section::get(['id','status']);
      $sliders = Slider::get();
      return view('main')->with('courses',$courses)
                        ->with('formList',$formList)
                        ->with('allProjects',$projects)
                        ->with('sections',$sections)
                        ->with('sliders',$sliders);
   }
   public function getForms($name)
   {
      //return $name;
       return view('forms.'.$name);
   }
}
