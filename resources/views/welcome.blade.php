<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


       

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
     
<div class="relative bg-white overflow-hidden">
  <div class="max-w-screen-xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div class="relative pt-4 px-4 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
          <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="#" aria-label="Home">
              <img class="h-14 w-auto sm:h-14" src="{{asset('images/ecuador.svg')}}" alt="Logo">
              </a>
             
            </div>
          </div>
          
        </nav>
      </div>

      <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            VoteEcu
           
            
          </h2>
          <span class="text-indigo-600 font-extrabold text-4x2 tracking-tight leading-8">¡El voto es secreto!</span>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          VoteEcu es una plataforma para ejercer el voto en cualquier tipo de elecciones, hemos tomado varias medidas en seguridad,
          con el objetivo de obtener resultados transparentes y en tiempo real.
          </p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
            <a href="{{route('login')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
               Iniciar
              </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="{{route('register')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-200 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                Registrar
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
  <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('images/bg.jpg')}}" alt="">
  </div>
</div>
    
    </body>
</html>
