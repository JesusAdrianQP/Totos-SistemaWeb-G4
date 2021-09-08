<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Diversidad y calidad en nuestra carta. Ordena Aquí tu combo favorito. Ordena tu Pizza Toto's Aquí. Entrega a Domicilio." />
        <meta name="DC.creator" content="ApuCreat" />
        <meta name="copyright" content="TOTO'S PIZZA S.A.C." />
        <link type="image/png" href="{{ asset('image/icono_totos.ico') }}" rel="icon"/>

        <!---Etiquetas open graph añadidas para mostrar en redes sociales-->
        <meta property="og:locale" content="es_ES" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Toto's Pizza S.A.C. | Huancayo" />
        <meta property="og:description" content="Diversidad y calidad en nuestra carta. Ordena Aquí tu combo favorito. Ordena tu Pizza Toto's Aquí. Entrega a Domicilio." />
        <meta property="og:url" content="https://www.totos-peru.com/"/>
        <meta property="og:site_name" content="Toto's Pizza | Perú"/>
        <meta property="og:image" content="{{ asset('image/icono_totos.png') }}"/>
        <meta property="og:image:width" content="960" />
        <meta property="og:image:height" content="563" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext" rel="stylesheet" type="text/css">

        <!-- Taildwind CSS Link -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Toastr js-->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

        {{-- <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> --}}
    </head>

    <body>
        <div>
            <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
                @include('components.sidebar')

                @yield('content-admin')
            </div>  
        </div>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
        @include('components.notification')
        @include('components.sidebar-script')
    </body>
</html>
