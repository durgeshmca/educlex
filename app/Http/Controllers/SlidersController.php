<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SlidersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

    public function sliderList($id=0)
    {
      if($id>0){
        $sliders = Slider::find($id);
      }else {
        $sliders = Slider::get();
      }

      return view('admin.sliders.list')->with('sliders',$sliders);

    }
    //method for store and update sliders
    public function store(Request $request,$id = '')
    {

      $validationArray = [
        'type'=>'required',
        'slider_heading'=> 'required',
        'slider_sub_heading'=>'required',
      ];
      if($id){
        if($request->hasFile('slider_image')){
          $validationArray['slider_image'] = 'max:2000';
        }

      } else {
        $validationArray['slider_image'] = 'required|max:2000';
      }
      $this->validate($request, $validationArray);
      if($id){
        $slider = Slider::find($id);
        $filenameToStore = $slider->slider_image;
      } else {
        $slider = New Slider;
      }
      if($request->hasFile('slider_image')){
          //upload image first
          // Get filename with extension
          $filenameWithExt = $request->file('slider_image')->getClientOriginalName();

          // Get just the filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

          // Get extension
          $extension = $request->file('slider_image')->getClientOriginalExtension();

          // Create new filename
          $filenameToStore = $filename.'_'.time().'.'.$extension;

          // Uplaod image
          //$path= $request->file('cover_image')->storeAs(public_path().'/storage/album_covers/', $filenameToStore);
          $request->file('slider_image')->move(public_path("/assets/frontend/onepage2/img/slider/"), $filenameToStore);
    }


      $slider->type = $request->type;
      $slider->slider_link_label = $request->slider_link_label;
      $slider->slider_link = $request->slider_link;
      $slider->slider_heading = $request->slider_heading;
      $slider->slider_sub_heading = $request->slider_sub_heading;
      $slider->slider_image = $filenameToStore;
      $slider->slider_link_target = ($request->slider_link_target)?$request->slider_link_target:"modal";
      $slider->save();
      return redirect('/sliders/list/')->with('success', 'slider Updated');
    }
    public function create()
    {
      return view('admin.sliders.create');
    }
    public function destroy($id)
    {
      $slider = Slider::find($id);
      $filePath = 'assets/frontend/onepage2/img/slider/'.$slider->slider_image;
      if (file_exists($filePath) && $slider->slider_image) {
        unlink(public_path($filePath));
      }

      $slider->delete();
      return redirect('/sliders/list/')->with('success', 'slider Deleted');
    }
}
