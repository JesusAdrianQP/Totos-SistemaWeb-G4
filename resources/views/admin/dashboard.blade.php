@extends('layouts.admin')

@section('title', 'DashBoard Principal - Menú')

@section('content-admin')

    <!-- Loading screen -->
    <div
        x-ref="loading"
        class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50"
        style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
    >
        Loading.....
    </div>

    <div class="flex flex-col flex-1 h-full overflow-hidden">
        @include('components.navbar-admin')
        
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
            <!-- Main content header -->
            <div
                class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row"
            >
                <h1 class="text-2xl font-semibold whitespace-nowrap">Platos del Menú</h1>
            </div>

            <!-- Start Content -->
            <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Consumidores totales</span>
                            <span class="text-lg font-semibold">200,000</span>
                        </div>
                        <div class="bg-gray-200 rounded-md w-20 h-20">
                            <img src="{{ asset('image/pizza.svg') }}" class="w-20 h-20">
                        </div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                        <span>más que el 2020</span>
                    </div>
                </div>

                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Ganancias</span>
                            <span class="text-lg font-semibold">S/. 500,550.00</span>
                        </div>
                        <div class="bg-gray-200 rounded-md w-20 h-20">
                            <img src="{{ asset('image/bolsa-de-dinero.svg') }}" class="w-20 h-20 py-2">
                        </div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">30%</span>
                        <span>más que el 2020</span>
                    </div>
                </div>
            </div>

            <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
            <h3 class="mt-6 text-xl">Platos del menú</h3>
            <button onclick="mostrarModal()"
               class="mt-2 flex items-center justify-center w-1/2 lg:w-1/6 px-2 py-2 space-x-1 tracking-wider bg-cuarto-500 border rounded-md focus:outline-none focus:ring"
            > 
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> 
                </span>

                <span class="text-white bold"> Agregar plato </span>
            </button>
          
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                            <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                        scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                        >
                                            Plato
                                        </th>
                                        <th
                                        scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                        >
                                            Descripción
                                        </th>
                                        <th
                                        scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                        >
                                            Categoría
                                        </th>
                                        <th
                                        scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                        >
                                            Precio Regular
                                        </th>
                                        <th
                                        scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                        >
                                            Precio Familiar
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody class="bg-white divide-y divide-gray-200">  
                                @foreach($dishes as $dish)                          
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img
                                                class="w-10 h-10 rounded-full"
                                                src="{{asset($dish->file)}}" 
                                                alt=""
                                                />
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{$dish->name}}</div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900" style="white-space: pre-wrap; word-wrap: break-word; font-family: inherit;">{{$dish->description}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-primero-600 bg-cuarto-300 rounded-full"
                                            >
                                            {{$dish->category}}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">S/. {{$dish->price_normal}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">S/. {{$dish->price_familiar}}</td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <div class="flex item-center justify-center">                                            
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <a href="{{route("dishes.edit",[$dish])}}">
                                                        <svg  class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <form action="{{route("dishes.destroy", [$dish])}}" method="POST">
                                                        @method("delete")
                                                        @csrf
                                                        <button type="submit">
                                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>  
                                @endforeach                          
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>   
        
        @include('components.register-dish')
    </div>   
@endsection