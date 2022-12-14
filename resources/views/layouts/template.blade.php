<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite('resources/css/app.css')

  <title>@yield('title')</title>
</head>
<body class="h-auto w-screen bg-background bg-cover bg-no-repeat overflow-x-hidden">
  <header class="h-24 w-full absolute">
    <div class="backdrop-blur-sm bg-white/20 flex flex-1 flex-row items-center justify-between px-8 py-2">
      <a href="{{route('albums.index')}}">
        <img src="{{ URL::to('assets/images/logo-2.png') }}" alt="Logo">
      </a>
      <nav>
        <ul class="flex">
          <li class="mr-4">
            <a href="{{route('albums.create')}}">
              <x-feathericon-plus-circle class="h-8 w-8" />
            </a>
          </li>
          <li>
            <a href="{{route('tracks.index')}}">
              <x-feathericon-play-circle class="h-8 w-8" />
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="h-auto w-full flex items-center justify-center">
    @yield('content')
  </main>
</body>
</html>
