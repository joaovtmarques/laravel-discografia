<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite('resources/css/app.css')

  <title>@yield('title')</title>
</head>
<body class="overflow-x-hidden">
  <header class="fixed w-screen backdrop-blur-sm bg-white/20 ">
    <div class="flex flex-1 flex-row items-center justify-between px-8 py-3">
      <a href="/">
        <img src="{{ URL::to('assets/images/logo-2.png') }}" alt="Logo">
      </a>
      <nav>
        <ul class="flex">
          <li class="mr-4">
            <a href="{{url('/add-album')}}">
              <x-feathericon-plus-circle class="h-8 w-8" />
            </a>
          </li>
          <li>
            <a href="{{url('add-faixa')}}">
              <x-feathericon-play-circle class="h-8 w-8" />
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="h-screen w-screen bg-background bg-cover bg-no-repeat">
    @yield('content')
  </main>
  <footer></footer>
</body>
</html>
