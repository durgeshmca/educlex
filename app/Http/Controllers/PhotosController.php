<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Album;
class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create($album_id=0){
       $albums = Album::select(['id','name'])->get();
       if ($album_id) {
        return view('admin.photos.create')->with('album_id', $album_id)->with('albums', $albums);
       }
       return view('admin.photos.create')->with('albums', $albums);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
      'title' => 'required',
      'photo' => 'image|max:1999'
    ]);

    // Get filename with extension
    $filenameWithExt = $request->file('photo')->getClientOriginalName();

    // Get just the filename
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    // Get extension
    $extension = $request->file('photo')->getClientOriginalExtension();

    // Create new filename
    $filenameToStore = $filename.'_'.time().'.'.$extension;

    // Uplaod image
    $path= $request->file('photo')->move(public_path('/storage/photos/').$request->input('album_id'), $filenameToStore);

    // Upload Photo
    $photo = new Photo;
    $photo->album_id = $request->input('album_id');
    $photo->title = $request->input('title');
    $photo->description = $request->input('description');
    $photo->size = $request->file('photo')->getClientSize();
    $photo->photo = $filenameToStore;

    $photo->save();

    return redirect('/albums/show/'.$request->input('album_id'))->with('success', 'Photo Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $photo = Photo::find($id);
      return view('photos.show')->with('photo', $photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
