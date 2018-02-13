<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CoursesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth',['except'=>['getCourse']]);
  }
    public function getCourse($value='')
    {
      $courses = Course::where('id',$value)->get(['content']);
      return view('courses.course')->with('courses',$courses);
    }
    public function courseList($id=0)
    {
      if($id>0){
        $courses = Course::find($id);
      }else {
        $courses = Course::get(['id','course','desc']);
      }

      return view('admin.courses.list')->with('courses',$courses);

    }
    //method for store and update courses
    public function store(Request $request,$id = '')
    {
      $this->validate($request,[
        'course'=>'required',
        'desc'=> 'required',
        'content'=>'required',
      ]);
      if($id){
        $course = Course::find($id);
      } else {
        $course = New Course;
      }

      $course->course = $request->course;
      $course->desc = $request->desc;
      $course->content = $request->content;
      $course->save();
      return redirect('/courses/list/')->with('success', 'Course Updated');
    }
    public function create()
    {
      return view('admin.courses.create');
    }
    public function destroy($id)
    {
      Course::destroy($id);
      return redirect('/courses/list/')->with('success', 'Course Deleted');
    }
}
