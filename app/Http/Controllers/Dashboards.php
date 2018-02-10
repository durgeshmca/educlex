<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkshopEnquiry;
use App\CollegeWrokshop;
use App\Corporate;
use App\IndustrialTraining;
use App\Contact;
use App\Course;
class Dashboards extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $total =array();
      $total['individual'] = WorkshopEnquiry::where('enquiry_type', 'individual')->count();
      $total['classroom'] = WorkshopEnquiry::where('enquiry_type', 'classroom')->count();
      $total['college'] = CollegeWrokshop::count();
      $total['corporate'] = Corporate::count();
      $total['industrial'] = IndustrialTraining::count();
      $total['contact'] = Contact::count();
      $total['course'] = Course::count();
      return view('admin.dashboard')->with('total',$total);
    }
    public function countAll()
    {
      $total =array();
      $total['individual'] = WorkshopEnquiry::count();
      $total['college'] = CollegeWrokshop::count();
      $total['corporate'] = Corporate::count();
      $total['industrial'] = IndustrialTraining::count();
      $total['contact'] = Contact::count();
      $total['course'] = Course::count();
    }
}
