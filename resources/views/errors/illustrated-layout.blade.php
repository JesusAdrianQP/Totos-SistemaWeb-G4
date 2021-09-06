<!DOCTYPE html>
<html>
    <head>
        <title>404 Error Page Design In Tailwind CSS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <!-- Taildwind CSS Link -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <style type="text/css">
        .text-9xl{
        font-size: 14rem;
        }
        @media(max-width: 645px){
        .text-9xl{
        font-size: 5.75rem;
        }
        .text-6xl{
        font-size: 1.75rem;
        }
        .text-2xl {
        font-size: 1rem;
        line-height: 1.2rem;
        }
        .py-8 {
        padding-top: 1rem;
        padding-bottom: 1rem;
        }
        .px-6 {
        padding-left: 1.2rem;
        padding-right: 1.2rem;
        }
        .mr-6{
        margin-right: 0.5rem;
        }
        .px-12 {
        padding-left: 1rem;
        padding-right: 1rem;
        }
        }
        </style>
    </head>
    <body>
        <div class="bg-gradient-to-r from-purple-300 to-blue-200">
        <div class="w-9/12 m-auto py-16 min-h-screen flex items-center justify-center">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg pb-8">
        <div class="border-t border-gray-200 text-center pt-8">
        <h1 class="text-9xl font-bold text-purple-400">404</h1>
        <h1 class="text-6xl font-medium py-8">oops! Page not found</h1>
        <p class="text-2xl pb-8 px-12 font-medium">Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
        <button class="bg-gradient-to-r from-purple-400 to-blue-500 hover:from-pink-500 hover:to-orange-500 text-white font-semibold px-6 py-3 rounded-md mr-6">
        HOME
        </button>
        <button class="bg-gradient-to-r from-red-400 to-red-500 hover:from-red-500 hover:to-red-500 text-white font-semibold px-6 py-3 rounded-md">
        Contact Us
        </button>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <!-- Taildwind CSS Link -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased font-sans">
        <div class="md:flex min-h-screen">
        <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
                <div class="max-w-sm m-8">
                    <div class="text-black text-5xl md:text-15xl font-black">
                        @yield('code', __('Oh no'))
                    </div>

                    <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>

                    <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                        @yield('message')
                    </p>

                    <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                        <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                            {{ __('Ir a inicio') }}
                        </button>
                    </a>
                </div>
            </div>

            <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
                @yield('image')
            </div>
        </div>
    </body>
</html>
