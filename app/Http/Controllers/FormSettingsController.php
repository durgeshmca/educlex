<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormSetting;
class FormSettingsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      //return all form with settings
      $forms = FormSetting::get();
      return view('admin.formsetting.index')->with('settings',$forms);
    }
    public function show($id)
    {
      $forms = FormSetting::findOrFail($id);
      return view('admin.formsetting.index')->with('settings',$forms);
    }
    public function store(Request $request, $id)
    {
      $this->validate($request,[
        'status'=>'required|max:1|min:0',
    ]);
    //update status
      $form = FormSetting::find($id);
      $form->link_label = $request->link_label;
      $form->status = $request->status;
      $form->save();
      return redirect('/form/setting')->with('success', 'Form status updated to '.$request->status);
    }
}
