<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

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
        return redirect('/#contact')->with('status', 'Thank you for contacting us . We will get back to you soon');
      }else {
        return redirect('/#contact')->with('status', 'Sorry !!.Due to some technical error .We are unable to recieve your queries.');
      }
    }
}
