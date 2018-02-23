<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class ProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    public function index()
    {
      $profile = Profile::find(1);
      return view('admin.profile')->with('profile',$profile);
    }
    public function update(Request $request)
    {
      $this->validate($request , [
        'company_name' => 'required',
        'contacts' => 'required',
        'address' => 'required',
        'email' => 'required|email',
        'footer' => 'required',

      ]);
      $profile = Profile::find(1);
      $profile->company_name = $request->company_name;
      $profile->contacts = $request->contacts;
      $profile->address = $request->address;
      $profile->email = $request->email;
      $profile->footer_name = $request->footer;
      $profile->facebook_link = $request->facebook_link;
      $profile->linked_in = $request->linked_in;
      $profile->twitter_link = $request->twitter_link;
      $profile->google_link = $request->google_link;
      $profile->save();
      return redirect('/profile/setting')->with('success',"Profile Updated");
    }
}
