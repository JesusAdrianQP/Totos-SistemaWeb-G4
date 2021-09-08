@extends('layouts.custom')

@section('header')
    <div class="w-full flex flex-row flex-wrap">
        <!-- Profile Card -->
        <div class="bg-fixed shadow-lg bg-gray-600 w-full h-full flex flex-row flex-wrap antialiased profile-background">
            <div class=" h-screen w-full">
                @include('components.navbar')
                <div class="flex items-center justify-center w-full h-full bg-opacity-50">
                    
                    <div class="text-center">
                        <h1 class="text-2xl font-semibold text-white uppercase lg:text-5xl">¡Bienvenidos a <br><span class="text-segundo-300 text-6xl">Toto’s Pizza!</span></h1>
                        <br>
                        <a href="{{route('dishes.pizzas')}}" class="my-8 w-full px-4 py-2 mt-4 text-sm font-medium text-white uppercase transition-colors duration-200 transform bg-primero-500 rounded-md lg:w-auto hover:bg-primero-400 focus:outline-none focus:bg-primero-400">Ver Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Profile Card --> 
    </div>
@endsection

@section('content-custom')
    <section class="bg-primero-500 w-full">
        <div class="flex items-center justify-center w-full container px-6 py-4 mx-auto">
            <div class="text-center">
                <!-- Card nosotros -->
                <div class="flex items-center  my-10 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
                    <img alt="mountain" class="w-1/2 rounded-md border-2 border-gray-300" src="{{ asset('image/pizza2.jpg') }}" style="width: 500px" />
            
                    <div id="body" class="flex flex-col ml-5 p-4">
                        <h4 id="name" class="text-4xl text-primero-500 font-semibold mb-2">Nosotros</h4> 
                        <p id="job" class="text-gray-800 mt-2">Somos una empresa con 8 años en el mercado regional, <br>te ofrecemos las más ricas pastas y pizzas preparadas<br> con insumos de alta calidad.</p>
                    </div>
                </div>
            </div>        
        </div>
    </section>

    <section class="px-14 grid grid-cols-4 gap-5 justify-items-center bg-primero-500 py-8">
            <div class="cursor-pointer relative" style="width:300px; height:300px">
                <img src="{{ asset('image/pizza01.jpg') }}"
                    class="foto w-full h-full object-cover"
                    alt="description" />
            </div>
            <div class="cursor-pointer relative" style="width:300px; height:300px">
                <img src="{{ asset('image/pizza02.jpg') }}"
                    class="foto w-full h-full object-cover"
                    alt="description" />
            </div>
            <div class="cursor-pointer relative" style="width:300px; height:300px">
                <img src="{{ asset('image/pizza03.jpg') }}"
                    class="foto w-full h-full object-cover"
                    alt="description" />
            </div>
            <div class="cursor-pointer relative" style="width:300px; height:300px">
                <img src="{{ asset('image/pizza04.jpg') }}"
                    class="foto w-full h-full object-cover"
                    alt="description" />
            </div>
            <br>
            <a href="{{route('dishes.pizzas')}}" class="flex items-center justify-center col-span-4 my-8 w-full px-4 py-2 mt-4 text-sm font-medium text-primero-500 uppercase transition-colors duration-200 transform bg-white rounded-md lg:w-auto hover:bg-primero-400 focus:outline-none focus:bg-primero-400">CONSULTE LA CARTA</a>
    </section>
    <section class="bg-transparent w-full ct-nos-background">
        <!-- Container -->
        <div class="container w-full">
            <div class="grid justify-items-start pr-6 pl-32  w-full">
                <div class="w-full lg:w-1/2 bg-transparent p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center text-white font-bold">¡Contáctanos!</h3>
                    <form action="{{route('messages.store')}}" method="POST" class=" px-8 pt-6 pb-8 mb-4 bg-transparent rounded" >
                        @csrf
                            
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-white" for="name">
                                Nombre
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-white bg-transparent border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="name"
                                name="name"
                                type="text"
                                placeholder="Nombre"
                            />

                            @error('name')
                                <span class="invalid-feedback w-full text-red-600 text-xs" role="alert">
                                    *{{ $message }}
                                </span>
                            @enderror                                
                        </div>
                        
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-white" for="email">
                                Correo
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-white bg-transparent border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                name="email"
                                type="email"
                                placeholder="Correo"
                            />
                                
                            @error('email')
                                <span class="invalid-feedback w-full text-red-600 text-xs" role="alert">
                                    *{{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-white" for="message">
                                Mensaje
                            </label>
                            <textarea name="message" id="message" cols="30" rows="10" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-white bg-transparent border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                                
                            @error('message')
                                <span class="invalid-feedback w-full text-red-600 text-xs" role="alert">
                                    *{{ $message }}
                                </span>
                            @enderror
                        </div>
                            
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-primero-500 rounded-full hover:bg-primero-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection