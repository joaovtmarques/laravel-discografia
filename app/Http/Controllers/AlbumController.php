<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumRequest;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
      return view('index');
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
        //
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
