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
          <form action="" class="h-full flex flex-row justify-between items-center">
            <input type="text" class="h-full w-full rounded-3xl outline-none pl-6 font-aLight text-zinc-600 flex-row items-center border-none">
            <button class="h-full bg-blue-400 rounded-3xl px-4 sm:px-14 ml-4 cursor-pointer hover:bg-blue-500">
              <span class="text-white font-aLight hidden sm:inline">
                Procurar
              </span>
              <x-feathericon-search class="h-6 w-6 sm:hidden stroke-white" />
            </button>
          </form>
        </div>
      </div>

      @foreach ($albums as $album)
        <div class="mt-8 px-4">
          <div>
            <p class="font-aBold">Álbum: <span>{{$album['name']}}, {{$album['year']}}</span></p>
          </div>
          <div class="mt-3">
            <div class="flex items-center pl-1 mt-1">
              <span class="w-8 font-aLight">Nº</span>
              <span class="w-full pl-6 font-aLight">Faixa</span>
              <span class="w-20 font-aLight">Duração</span>
            </div>
            @foreach ($album['track'] as $track)
              <div class="flex items-center pl-1 mt-1">
                <span class="w-8 font-aLight">{{$track['number']}}</span>
                <span class="w-full pl-6 font-aLight text-ellipsis">{{$track['name']}}</span>
                <span class="w-20 font-aLight">{{$track['minutes']}}:{{$track['seconds']}}</span>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
