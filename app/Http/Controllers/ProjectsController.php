<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth',['except'=>['getProject']]);
    }
      public function getProject($value='')
      {
        $projects = Project::get();
        return view('projects.project')->with('projects',$projects);
      }
      public function projectList($id=0)
      {
        if($id>0){
          $projects = Project::find($id);
        }else {
          $projects = Project::get(['id','project','desc']);
        }

        return view('admin.projects.list')->with('projects',$projects);

      }
      //method for store and update projects
      public function store(Request $request,$id = '')
      {
        $this->validate($request,[
          'project'=>'required',
          'desc'=> 'required',
          'content'=>'required',
        ]);
        if($id){
          $project = Project::find($id);
        } else {
          $project = New Project;
        }

        $project->project = $request->project;
        $project->desc = $request->desc;
        $project->content = $request->content;
        $project->save();
        return redirect('/projects/list/')->with('success', 'project Updated');
      }
      public function create()
      {
        return view('admin.projects.create');
      }
      public function destroy($id)
      {
        Project::destroy($id);
        return redirect('/projects/list/')->with('success', 'project Deleted');
      }
  }
