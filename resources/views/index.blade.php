@extends('layouts.template')

@section('title', 'Discografia - Tião Carreiro e Pardinho')

@section('content')
  <div class="bg-white/80 w-5/6 shadow-lg pb-20 mb-20 mt-28">
    <div class="bg-white w-full sm:h-28 sm:flex-row flex flex-col justify-between items-center px-6 py-6 shadow-lg">
      <img src="{{ URL::to('assets/images/logo.png') }}" alt="Logo" class="sm:w-40 sm:h-20 w-32 h-12">
      <h2 class="md:text-4xl sm:font-extralight sm:pt-0 font-normal text-2xl pt-4 font-aLight text-zinc-600">Discografia</h2>
    </div>
    <div class="h-auto flex-col items-start p-4">
      <div>
        <span class="font-aLight text-zinc-600text-left">Digite uma palavra-chave</span>
        <div class="w-full h-12 mt-2">
          <form action="{{route('albums.index')}}" method="GET" class="h-full flex flex-row justify-between items-center">
            <input name="query" type="search" class="h-full w-full rounded-3xl outline-none pl-6 font-aLight text-zinc-600 flex-row items-center border-none">
            <button type="submit" class="h-full bg-blue-400 rounded-3xl px-4 sm:px-14 ml-4 cursor-pointer hover:bg-blue-500">
              <span class="text-white font-aLight hidden sm:inline">
                Procurar
              </span>
              <x-feathericon-search class="h-6 w-6 sm:hidden stroke-white" />
            </button>
          </form>
        </div>
      </div>
      @if (\Session::has('success'))
        <div class="h-8 bg-green-300 rounded-md my-4 flex items-center">
          <ul>
            <li class="font-aBold text-sm text-white px-2">{!! \Session::get('success') !!}</li>
          </ul>
        </div>
      @endif

      @foreach ($albums as $album)
        <div class="mt-8 px-4">
          <div class="flex justify-between items-center">
            <div>
              <p class="font-aBold">Álbum: <span>{{$album['name']}}, {{$album['year']}}</span></p>
            </div>
            <div>
              <form action="{{ route('albums.destroy', $album->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="" title="Delete">
                  <x-feathericon-trash-2 class="h-4 w-4 stroke-red-600" />
                </button>
              </form>
            </div>
          </div>
          <div class="mt-3">
            <div class="flex justify-between items-center mt-1">
              <div class="flex items-center pl-1 mt-1">
                <span class="w-8 font-aLight ">Nº</span>
                <span class="pl-6 font-aLight text-ellipsis ">Faixa</span>
              </div>
              <div class="flex justify-between">
                <span class="font-aLight">Duração</span>
              </div>
            </div>
            @foreach ($album['track'] as $track)
              <div class="flex justify-between items-center">
                <div class="flex items-center pl-1 mt-1">
                  <span class="w-8 font-aLight">{{$track['number']}}</span>
                  <span class="pl-6 font-aLight text-ellipsis">{{$track['name']}}</span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="font-aLight w-[2.375rem]">{{$track['minutes']}}:{{$track['seconds']}}</span>
                  <form action="{{ route('tracks.destroy', $track->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="" title="Delete">
                      <x-feathericon-trash-2 class="h-4 w-4 stroke-red-600 ml-2" />
                    </button>
                  </form>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
