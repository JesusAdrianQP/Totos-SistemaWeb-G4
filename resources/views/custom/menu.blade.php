@extends('layouts.custom')

@section('header')
    <div class="bg-segundo-500">
        @include('components.navbar')
    </div>
@endsection

@section('content-custom')
<div class="bg-primero-500 px-32 py-10">
    <div class="bg-segundo-500 h-screen">
        <div class="grid grid-cols-5 px-20 pt-10 pb-8 justify-items-center">
            <a href="{{route('dishes.offers')}}"  class="text-cuarto-500 hover:underline">OFERTAS</a>
            <a href="{{route('dishes.pizzas')}}"  class="text-cuarto-500 hover:underline">PIZZAS</a>
            <a href="{{route('dishes.pastas')}}"  class="text-cuarto-500 hover:underline">PASTAS</a>
            <a href="{{route('dishes.drinks')}}"  class="text-cuarto-500 hover:underline">BEBIDAS</a>
            <a href="{{route('dishes.extra')}}"  class="text-cuarto-500 hover:underline">ADICIONALES</a>
        </div>
        <div class="border-b-2 border-white mx-8 "></div>

       <div class="grid grid-cols-3 justify-items-center mx-8 ">
        @foreach($dishes as $d)
        <div class="
            bg-white
            shadow-md
            h-80
            rounded-3xl
            flex flex-col
            justify-around
            items-center
            overflow-hidden
            sm:flex-row sm:h-52 sm:w-3/5
            md:w-96
            m-10
            ">
            <img class="h-1/2 w-full sm:h-full sm:w-1/2 object-cover"
            src="{{asset('image/pizza-prueba.jpg')}}"
            alt="pizza americana"
            />
            {{-- <img class="h-1/2 w-full sm:h-full sm:w-1/2 object-cover" 
                src="{{asset($d->file)}}" alt="Imagen"> --}}
            <div
            class="
                flex-1
                w-full
                flex flex-col
                items-baseline
                justify-around
                h-1/2
                pl-6
                sm:h-full sm:items-baseline sm:w-1/2
            "
            >
            <div class="flex flex-col justify-start items-baseline">
                <h1 class="text-lg font-normal mb-0 text-gray-600 font-sans uppercase">
                {{$d->name}}
                </h1>
            </div>
            <p class="text-sm text-gray-500 w-4/5">
                {{$d->description}}
            </p>
            <div class="grid grid-cols-2 gap-4">
                @if ($d->category === 'pizzas')
                    <div><h1 class="font-bold text-gray-500">Familiar: <span class="font-normal">{{$d->price_familiar}}</span></h1></div>
                @endif
                <div><h1 class="font-bold text-gray-500">Mediana: <span class="font-normal">{{$d->price_normal}}</span></h1></div>
          
            </div>
            </div>
        </div>
        @endforeach
        </div>
        {{$dishes->links()}}
    </div>
</div>

@endsection