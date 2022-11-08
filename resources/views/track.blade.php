@extends('layouts.template')

@section('title', 'Adicionar faixa - Tião Carreiro e Pardinho')

@section('content')
  <div class="w-4/5 sm:w-3/5 mt-28 pb-20 mb-20 h-auto">
    <div class="h-auto shadow-lg">
      <div class="h-24 bg-white flex items-center px-8 shadow-lg">
        <p class="font-aLight text-2xl sm:text-4xl text-zinc-600">Adicionar faixa</p>
      </div>
      <div class="w-full h-full bg-white/80 sm:px-8 py-10 flex flex-col items-center justify-center">
        <form action="" class="w-4/5 sm:w-3/6">
          <div class="flex flex-col mb-8">
            <label for="name" class="font-aLight text-zinc-600 mb-2">Nome da faixa</label>
            <input type="text" name="name" id="name" class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600">
          </div>
          <div class="flex flex-col mb-8">
            <label for="number" class="font-aLight text-zinc-600 mb-2">Número da faixa</label>
            <input
              type="number"
              name="number"
              id="number"
              class="h-12 px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600"
              oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
              maxlength = "2"
              >
          </div>
          <div class="flex flex-col mb-8">
            <label for="" class="font-aLight text-zinc-600 mb-2">Duração da faixa (ex: 2:44)</label>
            <div class="flex flex-row items-center">
              <input
                type="number"
                name="minutes"
                id="minutes"
                class="h-12 w-full px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "2"
              >
              <p class="m-4">:</p>
              <input
                type="number"
                name="seconds"
                id="seconds"
                class="h-12 w-full px-4 rounded-3xl shadow-md outline-none font-aLight text-sm text-zinc-600"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "2"
              >
            </div>
          </div>
          <div class="flex flex-col mb-8">
            <label for="album"></label>

            <select id="album" class="outline-none bg-white font-aLight text-sm text-zinc-600 rounded-3xl block w-full h-12 px-4 shadow-md ">
              <option disabled selected value="" class="font-aLight text-sm text-zinc-600">Selecione um álbum</option>
              <option value="Nome do álbum" class="font-aLight text-sm text-zinc-600">Nome álbum, 0000</option>
              <option value="Nome do álbum" class="font-aLight text-sm text-zinc-600">Nome álbum, 0000</option>
              <option value="Nome do álbum" class="font-aLight text-sm text-zinc-600">Nome álbum, 0000</option>
              <option value="Nome do álbum" class="font-aLight text-sm text-zinc-600">Nome álbum, 0000</option>
            </select>
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
