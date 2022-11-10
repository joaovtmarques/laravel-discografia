@extends('layouts.template')

@section('title', 'Adicionar faixa - Tião Carreiro e Pardinho')

@section('content')
  <div class="w-4/5 sm:w-3/5 mt-28 pb-20 mb-20 h-auto">
    <div class="h-auto shadow-lg">
      <div class="bg-white w-full sm:h-28 sm:flex-row flex flex-col justify-between items-center px-6 py-6 shadow-lg">
        <img src="{{ URL::to('assets/images/logo.png') }}" alt="Logo" class="sm:w-40 sm:h-20 w-32 h-12">
        <h2 class="md:text-4xl sm:font-extralight sm:pt-0 font-normal text-2xl pt-4 font-aLight text-zinc-600">Adicionar faixa</h2>
      </div>
      <div class="w-full h-full bg-white/80 sm:px-8 py-10 flex flex-col items-center justify-center">
        <form action="{{route('tracks.show')}}" method="POST" class="w-4/5 sm:w-3/6">
          @csrf
          <div class="flex flex-col mb-8">
            <label for="name" class="font-aLight text-zinc-600 mb-2">Nome da faixa</label>
            <input type="text" name="name" id="name" class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600 @error('name') border-2 border-red-500 @enderror">
            @error('name')
              <div>
                <p class="text-red-500 font-aLight text-sm pt-2">{{ $message }}</p>
              </div>
            @enderror
          </div>
          <div class="flex flex-col mb-8">
            <label for="number" class="font-aLight text-zinc-600 mb-2">Número da faixa</label>
            <input
              type="number"
              name="number"
              class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600 @error('number') border-2 border-red-500 @enderror"
              oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
              maxlength = "2"
              min="0"
            >
              @error('number')
              <div>
                <p class="text-red-500 font-aLight text-sm pt-2">{{ $message }}</p>
              </div>
            @enderror
          </div>
          <div class="flex flex-col mb-8">
            <label for="" class="font-aLight text-zinc-600 mb-2">Duração da faixa (ex: 2:44)</label>
            <div class="flex flex-row items-center">
              <input
                type="number"
                name="minutes"
                class="h-12 w-full px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600 @error('minutes') border-2 border-red-500 @enderror"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "2"
                min="0"
              >
              <p class="m-4">:</p>
              <input
                type="number"
                name="seconds"
                class="h-12 w-full px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600 @error('seconds') border-2 border-red-500 @enderror"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength ="2"
                min="0"
              >
            </div>
            @error('minutes')
              <div>
                <p class="text-red-500 font-aLight text-sm pt-2">{{ $message }}</p>
              </div>
            @enderror
            @error('seconds')
              <div>
                <p class="text-red-500 font-aLight text-sm pt-2">{{ $message }}</p>
              </div>
            @enderror
          </div>
          <div class="flex flex-col mb-8">
            <label for="album"></label>

            <select name="album_id" class="outline-none bg-white font-aLight text-sm text-zinc-600 rounded-3xl block w-full h-12 px-4 shadow-md @error('album_id') border-2 border-red-500 @enderror">
              <option disabled selected value="" class="font-aLight text-sm text-zinc-600">Selecione um álbum</option>
              @foreach ($albums as $album)
                <option value="{{$album->id}}" class="font-aLight text-sm text-zinc-600">{{ $album->name }}, {{ $album->year }}</option>
              @endforeach
            </select>
            @error('album_id')
              <div>
                <p class="text-red-500 font-aLight text-sm pt-2">{{ $message }}</p>
              </div>
            @enderror
          </div>
          <button class="h-12 w-full rounded-3xl bg-blue-400 shadow-md cursor-pointer hover:bg-blue-500 flex items-center justify-center">
            <span class="text-white font-aLight">
              Adicionar
            </span>
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection
