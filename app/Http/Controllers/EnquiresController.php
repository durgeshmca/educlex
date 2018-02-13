<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkshopEnquiry;
class EnquiresController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function individualView($id='')
    {
      if(empty($id)){
        $workshops = WorkshopEnquiry::orderBy('created_at','desc')->paginate(10);
        return view('admin.enquiries.workshop',['workshops'=>$workshops]);
      } else {
        $workshops = WorkshopEnquiry::find($id);
        return view('admin.enquiries.view',['forms'=>$workshops]);
      }

    }
    public function individualDelete($value='')
    {
      # code...
    }
}
