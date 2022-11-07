@extends('layouts.template')

@section('title', 'Adicionar álbum - Tião Carreiro e Pardinho')

@section('content')
  <div class="w-4/5 sm:w-3/5 mt-28 shadow-lg pb-20 mb-20 h-auto">
    <div class="h-96">
      <div class="h-24 bg-white flex items-center px-8">
        <p class="font-aLight text-2xl sm:text-4xl text-zinc-600">Adicionar álbum</p>
      </div>
      <div class="w-full h-full bg-white/80 sm:px-8 flex flex-col items-center justify-center">
        <form action="" class="w-4/5 sm:w-3/6">
          <div class="flex flex-col mb-8">
            <label for="name" class="font-aLight text-zinc-600 mb-2">Nome do álbum</label>
            <input type="text" name="Nome" id="name" class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600">
          </div>
          <div class="flex flex-col mb-8">
            <label for="year" class="font-aLight text-zinc-600 mb-2">Ano do álbum</label>
            <input
              type="number"
              name="Ano"
              id="year"
              class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600"
              oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
              maxlength = "4"
              >
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
