<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CoursesController extends Controller
{
    public function getCourse($value='')
    {
      $courses = Course::where('id',$value)->get(['content']);
      return view('courses.course')->with('courses',$courses);
    }

}
