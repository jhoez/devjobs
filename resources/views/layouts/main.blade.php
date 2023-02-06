<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- se utiliza para incluir css o js de ciertas vistas que lo requieran
        @stack('styles')
        -->
        <script src="{{ asset('js/app.js') }}"></script>
        <title>DevJobs - @yield('titulopagina')</title>
        
        @livewireStyles
    </head>
    <body class='bg-gray-200 min-h-screem leading-none'>
        <div id="app">
            <nav class="bg-gray-800 shadow-md py-2">
                <div class="container mx-auto md:px-0">
                    <div class="flex items-center justify-around">
                        <a class="text-2xl text-white" href="{{url('/')}}">
                            {{config('app.name','Laravel')}}
                        </a>

                        <nav class="flex-1 text-right">
                            @guest
                                <a class="text-white no-underline hover:underline hover:text-gray-300 p-3" href="{{ route('login') }}">Login</a>
                                @if (Route::has('formregister'))
                                    <a class="text-white no-underline hover:underline hover:text-gray-300 p-3" href="{{ route('formregister') }}">{{ __('Crear cuenta') }}</a>
                                @endif
                            @else
                                <span class="inline-block text-gray-300 text-sm pr-4">{{Auth::user()->username}}</span>
                                <form class="inline-block" action="{{ route('salir') }}" method="post">
                                    @csrf
                                    <button type="submit" class="text-white no-underline hover:underline hover:text-gray-300 p-3" >{{ __('Salir') }}</button>
                                </form>
                            @endguest
                        </nav>
                    </div>
                </div>
            </nav>

            <div class="bg-gray-700">
                <nav class="container mx-auto flex space-x-1">
                    @yield('menusegundario')
                </nav>
            </div>

            <main class="py-4">
                <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
                @yield('contenido')
            </main>
        </div>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            DevStagram - todos los derechos reservados {{ now()->year }}
        </footer>
        
        @livewireScripts
    </body>
</html>