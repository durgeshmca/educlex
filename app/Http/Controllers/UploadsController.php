<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
    //for uploading logo banner and updating ddress and contact no etc.
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function viewLogo()
    {
      return view('admin.uploads.logo');
    }
    public function viewBanner()
    {
      return view('admin.uploads.banner');
    }
    public function uploadLogo(Request $request)
    {
      $this->validate($request,[
        "logo"=>'required|mimes:png|max:102400',//100 KB Maximum

      ]);
      if($request->hasFile('logo')){
          //upload image first
          // Get filename with extension
          $filenameWithExt = $request->file('logo')->getClientOriginalName();

          // Get just the filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

          // Get extension
          $extension = $request->file('logo')->getClientOriginalExtension();

          // Create new filename
          $filenameToStore1 = "logo_default.png";
          $filenameToStore2 = "logo_scroll.png";
          if (file_exists(public_path("/assets/frontend/onepage2/img/").$filenameToStore1)) {
            unlink(public_path("/assets/frontend/onepage2/img/").$filenameToStore1);
          }
          if (file_exists(public_path("/assets/frontend/onepage2/img/").$filenameToStore2)) {
            unlink(public_path("/assets/frontend/onepage2/img/").$filenameToStore2);
          }

          // Uplaod image
          //$path= $request->file('cover_image')->storeAs(public_path().'/storage/album_covers/', $filenameToStore);
          //$request->file('logo')->copy(public_path("/assets/frontend/onepage2/img/"), $filenameToStore1);
          $request->file('logo')->move(public_path("/assets/frontend/onepage2/img/"), $filenameToStore1);
          copy(public_path("/assets/frontend/onepage2/img/").$filenameToStore1,public_path("/assets/frontend/onepage2/img/").$filenameToStore2);
          return redirect("/logo/setting")->with('success',"Logo Uploaded Successfully");

    }
    }
    public function uploadBanner(Request $request)
    {

        $this->validate($request,[
          "banner"=>'required|mimes:png|max:102400',//100 KB Maximum

        ]);
        if($request->hasFile('banner')){
            //upload image first
            // Get filename with extension
            $filenameWithExt = $request->file('banner')->getClientOriginalName();

            // Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get extension
            $extension = $request->file('banner')->getClientOriginalExtension();

            // Create new filename
            $filenameToStore = "banner.png";
            if (file_exists(public_path("/assets/frontend/onepage2/img/").$filenameToStore)) {
              unlink(public_path("/assets/frontend/onepage2/img/").$filenameToStore);
            }

            // Uplaod image
            //$path= $request->file('cover_image')->storeAs(public_path().'/storage/album_covers/', $filenameToStore);
            //$request->file('logo')->copy(public_path("/assets/frontend/onepage2/img/"), $filenameToStore1);
            $request->file('banner')->move(public_path("/assets/frontend/onepage2/img/"), $filenameToStore);
            return redirect("/banner/setting")->with('success',"Banner Uploaded Successfully");

      }
    }
}
