<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumRequest;
use App\Models\Album;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function index()
    {
      if(request()->query('query')) {
        $albums = Album::where('name', 'like', '%'.request()
          ->query('query').'%')
          ->with('track')
          ->get();

        return view('index', array('albums'=>$albums));
      } else {
        return view('index', array('albums'=>Album::all()));
      }
    }

    public function create()
    {
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

    public function show(Request $request)
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
