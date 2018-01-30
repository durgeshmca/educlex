<?php

namespace App\Http\Controllers;

use App\WorkshopEnquiry;
use App\CollegeWrokshop;
use App\Corporate;
use App\IndustrialTraining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WorkshopMail;
class WrkshopController extends Controller
{
    //workshop Controller
    public function submit(Request $request)
    {

      $this->validate($request, [
        'fname'=>'required',
        'email'=>'required|email',
        'contact'=>'required|min:10|max:13',
        'address'=>'required',
        'cat'=>'required',
        'landmark'=>'required',
        'qualification'=>'required',
        'interest'=>'required',
        'photo'=>'required|mimes:jpeg,png,gif|max:3145728'

      ]);
      if ($request->photo->isValid()) {
        $path=$request->photo->store('uploads.individual');

      } else {
        $this->validate()->errors()->add('photo','Images could not be uploaded.');
      }
      $workshop = new WorkshopEnquiry;
        $workshop->enquiry_type =($request->enquiry_type)?base64_decode($request->enquiry_type):'individual';
        $workshop->fname = $request->fname;
        $workshop->lname = $request->lname;
        $workshop->email = $request->email;
        $workshop->contact = $request->contact;
        $workshop->addres = $request->address;
        $workshop->state = $request->state;
        $workshop->city = $request->city;
        $workshop->college = $request->college;
        $workshop->category = $request->cat;
        $workshop->landmark = $request->landmark;
        $workshop->qualification = $request->qualification;
        $workshop->Designation = $request->designation;
        $workshop->company = $request->company;
        $workshop->images = $path;
        $workshop->year_sem = $request->sem_year;
        $workshop->interests = implode(',',$request->interest);
        if($workshop->save())
        {
           Mail::to($request->email)->send(new WorkshopMail($request));
          return redirect('/')->with('status','Your Workshop Enquiry has been saved We shall get back to you soon');
        }
        else
          {
            return redirect('/')->with('status','Your Workshop Enquiry failed. Please try after sometimes.');
        }

    }
    //function to store college workshop queries
    public function submitCollegeWorkshop(Request $request)
    {
      $this->validate($request,[
        'fname'=>'required',
        'email'=>'required|email',
        'contact'=>'required|min:10|max:13',
        'address'=>'required',
        'college'=>'required',
        'landmark'=>'required',
        'city'=>'required',
        'total_students'=>'required',
        'payment_mode'=>'required',
        'interest'=>'required',
        'collegeimg.0'=>'required|mimes:jpeg,gif,png|max:3145728',
        'collegeimg.1'=>'required|mimes:jpeg,gif,png|max:3145728',
        'collegeimg.2'=>'required|mimes:jpeg,gif,png|max:3145728'
      ],
      [
        'collegeimg.0.required'=>'Please upload at least three images less than 3 MB',
        'collegeimg.1.required'=>'Please upload at least three images less than 3 MB',
        'collegeimg.2.required'=>'Please upload at least three images less than 3 MB'
      ]
    );
      //validate and upload files
      if ($request->file('collegeimg.0')->isValid() AND $request->file('collegeimg.1')->isValid() AND $request->file('collegeimg.2')->isValid()) {
        $path1=$request->file('collegeimg.0')->store('uploads');
        $path2=$request->file('collegeimg.1')->store('uploads');
        $path3=$request->file('collegeimg.2')->store('uploads');
        $path=$path1.','.$path2.','.$path3;
      } else {
        $this->validate()->errors()->add('collegeimg.0','Images could not be uploaded.');
      }


      $colworksh=new CollegeWrokshop();
      $colworksh->fname = $request->fname;
      $colworksh->lname = $request->lname;
      $colworksh->email = $request->email;
      $colworksh->contact = $request->contact;
      $colworksh->address = $request->address;
      $colworksh->state = $request->state;
      $colworksh->city = $request->city;
      $colworksh->college = $request->college;
      $colworksh->landmark = $request->landmark;
      $colworksh->total_students = $request->total_students;
      $colworksh->placement_assistance = $request->placement;
      $colworksh->images = $path;
      $colworksh->interests = implode(',',$request->interest);
      if($colworksh->save())
      {
        return redirect('/#about')->with('status','Your Workshop Enquiry has been saved We shall get back to you soon');
      }
      else
        {
          return redirect('/#about')->with('status','Your Workshop Enquiry failed. Please try after sometimes.');
      }
    }
    //function to store industrial training  queries
    public function submitIndustrialTraining(Request $request)
    {
      $this->validate($request,[
        'fname'=>'required',
        'email'=>'required|email',
        'contact'=>'required|min:10|max:13',
        'address'=>'required',
        'college'=>'required',
        'qualification'=>'required',
        'landmark'=>'required',
        'city'=>'required',
      //  'total_students'=>'required',
        'payment_mode'=>'required',
        'interest'=>'required',
        'photo'=>'required|mimes:jpeg,png,gif|max:3145728'
      ],
      [
        'photo.required'=>'Please upload  Your Photo less than 3 MB'
      ]
    );
      //validate and upload files
      if ($request->photo->isValid()) {
        $path=$request->photo->store('uploads.industrial');

      } else {
        $this->validate()->errors()->add('photo','Images could not be uploaded.');
      }


      $corworksh=new IndustrialTraining();
      $corworksh->fname = $request->fname;
      $corworksh->lname = $request->lname;
      $corworksh->email = $request->email;
      $corworksh->contact = $request->contact;
      $corworksh->address = $request->address;
      $corworksh->state = $request->state;
      $corworksh->city = $request->city;
      $corworksh->college = $request->college;
      $corworksh->landmark = $request->landmark;
      $corworksh->year_sem = $request->sem_year;
      $corworksh->payment_mode = $request->payment_mode;
      $corworksh->qualification = $request->qualification;
      $corworksh->images = $path;
      $corworksh->interests = implode(',',$request->interest);
      if($corworksh->save())
      {
        return redirect('/#about')->with('status','Your Industrial Training Enquiry has been saved We shall get back to you soon');
      }
      else
        {
          return redirect('/#about')->with('status','Your Industrial Training Enquiry failed. Please try after sometimes.');
      }
    }

}
