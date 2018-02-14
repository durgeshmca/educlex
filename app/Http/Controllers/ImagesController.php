<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ImagesController extends Controller
{
  public function index(Request $request)
  {
      $filepath=$request->path;
      $file = Storage::get($filepath);
        $file = base64_encode($file);
      return response($file, 200)->header('Content-Type', 'image/jpeg');
    }
}
