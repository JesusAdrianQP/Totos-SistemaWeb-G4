@extends('layouts.custom')

@section('title', 'Login')

@section('content-custom')
    <!-- component -->
    <section class="flex flex-col md:flex-row h-screen items-center">
        <div class="hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="{{ asset('image/login-pizza.jpg') }}" alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
            flex items-center justify-center">
            <div class="w-full h-100">
                <h1 class="text-xl md:text-2xl font-bold leading-tight">Ingrese con su cuenta TOTO'S</h1>

                <form class="mt-6" action="#" method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div>
                        <label for="email" class="block text-gray-700">{{ __('Correo Electrónico') }}</label>
                        <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico" class="@error('email') is-invalid @enderror w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-cuarto-500 focus:bg-white focus:outline-none" autofocus autocomplete="email" required>
                                           
                        @error('email')
                            <span class="invalid-feedback w-full text-red-600 text-xs" role="alert">
                                *{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="password" class="block text-gray-700">{{ __('Contraseña') }}</label>
                        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" minlength="8" class="@error('password') is-invalid @enderror w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-cuarto-500
                                focus:bg-white focus:outline-none" required autocomplete="current-password">
                    
                        @error('password')
                            <span class="invalid-feedback w-full text-red-600 text-xs" role="alert">
                                *{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="text-right mt-2">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-primero-700 focus:text-primero-700">¿Olvidaste tu contraseña?</a>
                        @endif    
                    </div>

                    <button type="submit" class="w-full block bg-primero-500 hover:bg-primero-400 focus:bg-primero-400 text-white font-semibold rounded-lg
                        px-4 py-3 mt-6">{{ __('Ingresar') }}</button>
                </form>
            </div>
        </div>
    </section>           
@endsection
