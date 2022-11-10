<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumRequest;
use App\Models\Album;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function index(){
      $albums = Album::with('track')->get()->toArray();

      return view('index', array('albums'=>$albums));
    }

    public function create() {
      return view('album');
    }

    public function store(StoreAlbumRequest $request)
    {
      $album = new Album;
      $album->name = $request->name;
      $album->year = $request->year;
      $album->save();

      return redirect('albums');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
