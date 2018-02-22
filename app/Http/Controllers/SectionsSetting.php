<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
class SectionsSetting extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    //return all form with settings
    $sections = Section::get();
    return view('admin.section.index')->with('settings',$sections);
  }
  public function show($id)
  {
    $sections = Section::findOrFail($id);
    return view('admin.section.index')->with('settings',$sections);
  }
  public function store(Request $request, $id)
  {
    $this->validate($request,[
      'status'=>'required|max:1|min:0',
  ]);
  //update status
    $form = Section::find($id);
    $form->status = $request->status;
    $form->save();
    return redirect('/section/setting')->with('success', 'Form status updated to '.$request->status);
  }
}
