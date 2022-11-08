@extends('layouts.template')

@section('title', 'Adicionar álbum - Tião Carreiro e Pardinho')

@section('content')
  <div class="w-4/5 sm:w-3/5 mt-28 shadow-lg pb-20 mb-20 h-auto">
    <div class="h-96">
      <div class="bg-white w-full sm:h-28 sm:flex-row flex flex-col justify-between items-center px-6 py-6 shadow-lg">
        <img src="{{ URL::to('assets/images/logo.png') }}" alt="Logo" class="sm:w-40 sm:h-20 w-32 h-12">
        <h2 class="md:text-4xl sm:font-extralight sm:pt-0 font-normal text-2xl pt-4 font-aLight text-zinc-600">Adicionar álbum</h2>
      </div>
      <div class="w-full h-full bg-white/80 sm:px-8 flex flex-col items-center justify-center">
        <form action="" method="POST" class="w-4/5 sm:w-3/6">
          <div class="flex flex-col mb-8">
            <label for="name" class="font-aLight text-zinc-600 mb-2">Nome do álbum</label>
            <input type="text" name="name" id="name" class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600">
          </div>
          <div class="flex flex-col mb-8">
            <label for="year" class="font-aLight text-zinc-600 mb-2">Ano do álbum</label>
            <input
              type="number"
              name="year"
              id="year"
              class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600"
              oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
              maxlength = "4"
              >
          </div>
          <button type="submit" class="h-12 w-full rounded-3xl bg-blue-400 shadow-md cursor-pointer hover:bg-blue-500 flex items-center justify-center">
            <span class="text-white font-aLight">
              Adicionar
            </span>
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection
