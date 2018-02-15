<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkshopEnquiry;
use App\CollegeWrokshop;
use App\Corporate;
use App\IndustrialTraining;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
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
        $workshops = WorkshopEnquiry::findOrFail($id);
        return view('admin.enquiries.view',['forms'=>$workshops,'type'=>'multiple']);
      }

    }
    public function destroy($id)
    {
       $wrks= WorkshopEnquiry::find($id);
       Storage::delete($wrks->images);
       $wrks->delete();
       return redirect('/enquiries/view/individual')->with('success','Enquiry Deleted Successfully');
    }
    //corporate training Enquiries
    public function corporateView($id='')
    {
      if(empty($id)){
        $workshops =Corporate::orderBy('created_at','desc')->paginate(10);
        return view('admin.enquiries.corporate',['corporates'=>$workshops]);
      } else {
        $workshops = Corporate::findOrFail($id);
        return view('admin.enquiries.view_corporate',['corporates'=>$workshops,'type'=>'multiple']);
      }

    }
    //corporate delete
    public function destroyCorporate($id)
    {
       $wrks= Corporate::find($id);
       $imagesArray = explode(',',$wrks->images);
       Storage::delete($imagesArray);
       $wrks->delete();
       return redirect('/enquiries/view/corporate')->with('success','Enquiry Deleted Successfully');
    }
    //for industrial training enquiries
    public function industrialView($id='')
    {
      if(empty($id)){
        $workshops =IndustrialTraining::orderBy('created_at','desc')->paginate(10);
        return view('admin.enquiries.industrial',['industrial'=>$workshops]);
      } else {
        $workshops = IndustrialTraining::findOrFail($id);
        return view('admin.enquiries.view_industrial',['industrial'=>$workshops,'type'=>'multiple']);
      }

    }
    //industrial delete
    public function destroyindustrial($id)
    {
       $wrks= IndustrialTraining::find($id);
       $imagesArray = explode(',',$wrks->images);
       Storage::delete($imagesArray);
       $wrks->delete();
       return redirect('/enquiries/view/industrial')->with('success','Enquiry Deleted Successfully');
    }
    //for college workshop enquiries
    public function collegeView($id='')
    {
      if(empty($id)){
        $workshops = CollegeWrokshop::orderBy('created_at','desc')->paginate(10);
        return view('admin.enquiries.college',['college'=>$workshops]);
      } else {
        $workshops = CollegeWrokshop::findOrFail($id);
        return view('admin.enquiries.view_college',['college'=>$workshops,'type'=>'multiple']);
      }

    }
    //industrial delete
    public function destroyCollege($id)
    {
       $wrks= CollegeWrokshop::find($id);
       $imagesArray = explode(',',$wrks->images);
       Storage::delete($imagesArray);
       $wrks->delete();
       return redirect('/enquiries/view/college')->with('success','Enquiry Deleted Successfully');
    }
    public function export($model)
    {
      switch ($model) {
        case 'individual' :
        Excel::create('enquiry', function($excel){
        $excel->sheet('enquiry_list', function($sheet) {
        $data = WorkshopEnquiry::orderBy('created_at','desc')->get();
        $sheet->fromModel($data);
        });

      })->download('xlsx');
          break;
       case 'corporate':
            Excel::create('enquiry', function($excel){
            $excel->sheet('enquiry_list', function($sheet) {
            $data = Corporate::orderBy('created_at','desc')->get();
            $sheet->fromModel($data);
       });
       })->download('xlsx');

            break;
      case 'industrial':
                Excel::create('enquiry', function($excel){
                $excel->sheet('enquiry_list', function($sheet) {
                $data = IndustrialTraining::orderBy('created_at','desc')->get();
                $sheet->fromModel($data);
                });
                })->download('xlsx');

            break;
      case 'college':
              Excel::create('enquiry', function($excel){
              $excel->sheet('enquiry_list', function($sheet) {
              $data = CollegeWrokshop::orderBy('created_at','desc')->get();
              $sheet->fromModel($data);
              });
              })->download('xlsx');

            break;
        default:
          return response('Not Found');
          break;
      }


    }
}
