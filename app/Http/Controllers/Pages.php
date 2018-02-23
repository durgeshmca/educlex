<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Project;
use App\FormSetting;
use App\Section;
use App\Slider;
use App\Profile;
class Pages extends Controller
{
    public function main()
    {
      $courses = Course::get(['id','course']) ;
      $formList = FormSetting::get(['id','status']);
      $projects = Project::get();
      $sections = Section::get(['id','status']);
      $sliders = Slider::get();
      $profile = Profile::find(1);
      return view('main')->with('courses',$courses)
                        ->with('formList',$formList)
                        ->with('allProjects',$projects)
                        ->with('sections',$sections)
                        ->with('sliders',$sliders)
                        ->with('profile',$profile);
   }
   public function getForms($name)
   {
      //return $name;
       return view('forms.'.$name);
   }
}
