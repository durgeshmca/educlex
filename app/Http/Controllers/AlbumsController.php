<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $albums = Album::with('Photos')->get();
      return view('albums.index')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.album.create');
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
      'name' => 'required',
      'cover_image' => 'image|max:1999'
    ]);

    // Get filename with extension
    $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

    // Get just the filename
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    // Get extension
    $extension = $request->file('cover_image')->getClientOriginalExtension();

    // Create new filename
    $filenameToStore = $filename.'_'.time().'.'.$extension;

    // Uplaod image
    //$path= $request->file('cover_image')->storeAs(public_path().'/storage/album_covers/', $filenameToStore);
    $request->file('cover_image')->move(public_path("/storage/album_covers"), $filenameToStore);
    // Create album
    $album = new Album;
    $album->name = $request->input('name');
    $album->description = $request->input('description');
    $album->cover_image = $filenameToStore;

    $album->save();

    return redirect('/albums/create')->with('success', 'Album Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $album = Album::with('Photos')->find($id);
      return view('albums.show')->with('album', $album);
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
    public function adminIndex()
    {
      $albums = Album::with('Photos')->get();
      return view('admin.album.index')->with('albums', $albums);
    }
}
