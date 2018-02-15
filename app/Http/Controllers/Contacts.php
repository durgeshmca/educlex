<?php
namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WorkshopMail;
use Maatwebsite\Excel\Facades\Excel;
class Contacts extends Controller
{
    public function submit(Request $request)
    {
      $validated_data=$request->validate([
        'name'=>'required|regex:/^[\pL\s\-]+$/u',
        'email'=>'required|email',
        'subject'=>'required',
        'phone'=>'required|min:10|max:13',
        'message'=>'required']
      );
      $contact= new Contact();
      $contact->name=$request->name;
      $contact->email=$request->email;
      $contact->message=$request->message;
      $contact->phone=$request->phone;
      $contact->subject=$request->subject;
      if($contact->save())
      {
        Mail::to($request->email)->send(new WorkshopMail($request));
        return redirect('/#contact')->with('status', 'Thank you for contacting us . We will get back to you soon');
      }else {
        return redirect('/#contact')->with('status', 'Sorry !!.Due to some technical error .We are unable to recieve your queries.');
      }
    }
    public function show($id='')
    {
      if(empty($id)){
        $contacts = Contact::orderBy('created_at','desc')->paginate(10);
        return view('admin.enquiries.contact',['contacts'=>$contacts]);
      } else {
        $contacts = Contact::findOrFail($id);
        return view('admin.enquiries.view_contact',['contacts'=>$contacts,'type'=>'multiple']);
      }

    }
    //industrial delete
    public function destroy($id)
    {
       $wrks= Contact::destroy($id);
       return redirect('/enquiries/view/contact')->with('success','Contact Enquiry Deleted Successfully');
    }
    //function to export contact listed
    public function export()
    {
      Excel::create('ContactUs', function($excel){
      $excel->sheet('contact', function($sheet) {
      $data = Contact::orderBy('created_at','desc')->get();
      $sheet->fromModel($data);
      });
      })->download('xlsx');

}
}
