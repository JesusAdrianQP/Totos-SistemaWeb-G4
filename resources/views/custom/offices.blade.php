@extends('layouts.custom')

@section('header')
    <div class="bg-segundo-500">
        @include('components.navbar')
    </div>
@endsection

@section('content-custom')
<div class="offices-background px-32 py-10 h-screen">
    <div class="bg-segundo-500 ">
        <div class="grid grid-cols-1 px-20 pt-10 pb-8 justify-items-center">
            <span class="text-3xl text-cuarto-500">SUCURSALES</span>
        </div>
        <div class="border-b-2 border-white mx-8 "></div>

       <div class="grid grid-cols-3 justify-items-center mx-8 py-10">
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2 text-cuarto-500">TAMBO</h4>
                <p id="job" class="text-white mt-2">Avenida 13 de Noviembre 510</p>
                <div class="flex mt-5">                
                    <h1 class="font-bold text-gray-500">Horario de Atención: <p class="font-normal">Lunes-Domingo 12:45 a 8:45 pm</span></h1>
                </div>
            </div>
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2 text-cuarto-500">HUANCAYO</h4>
                <p id="job" class="text-white mt-2">Prolongación San Carlos 123</p>
                <div class="flex mt-5">                
                    <h1 class="font-bold text-gray-500">Horario de Atención: <p class="font-normal">Lunes-Domingo 12:45 a 8:45 pm</span></h1>
                </div>
            </div>
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2 text-cuarto-500">CHILCA</h4>
                <p id="job" class="text-white mt-2">Calle Real 421</p>
                <div class="flex mt-5">                
                    <h1 class="font-bold text-gray-500">Horario de Atención: <p class="font-normal">Lunes-Domingo 12:45 a 8:45 pm</span></h1>
                </div>
            </div>
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2 text-cuarto-500">CHUPACA</h4>
                <p id="job" class="text-white mt-2">Pasaje Turístico s/n</p>
                <div class="flex mt-5">                
                    <h1 class="font-bold text-gray-500">Horario de Atención: <p class="font-normal">Lunes-Domingo 12:45 a 8:45 pm</span></h1>
                </div>
            </div>
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2 text-cuarto-500">JAUJA</h4>
                <p id="job" class="text-white mt-2">Jirón Junín 938</p>
                <div class="flex mt-5">                
                    <h1 class="font-bold text-gray-500">Horario de Atención: <p class="font-normal">Lunes-Domingo 12:45 a 8:45 pm</span></h1>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection