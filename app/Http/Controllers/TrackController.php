<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrackRequest;
use App\Models\Album;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index(){
      return view('track', array('albums'=>Album::all()));
    }

    public function create() {

    }
    public function store(StoreTrackRequest $request)
    {
      $track = new Track;
      $track->name = $request->name;
      $track->number = $request->number;
      $track->minutes = $request->minutes;
      $track->seconds = $request->seconds;
      $track->album_id = $request->album_id;
      $track->save();

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
      $track = Track::find($id);
      $track->delete();
      return redirect('albums')->with('success', 'Faixa excluída com sucesso!');
    }
}
