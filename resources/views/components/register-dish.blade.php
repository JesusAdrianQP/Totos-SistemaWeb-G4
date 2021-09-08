<!-- component -->
<div class="flex fixed content-center top-0 left-0 justify-center items-center w-full flex-wrap antialiased" id="modalC" style="height:100vh; background: rgba(0,0,0,0.6); visibility:hidden;">
    <form action="{{route('dishes.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl" style="overflow:hidden;">
        @csrf
        <div class="flex flex-row justify-between p-3 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
            <p class="font-semibold text-gray-800">Registrar plato</p>
            
            <svg onclick="cerrarModal()"
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                ></path>
            </svg>
        </div>

        <div class="bg-gray-50">
            <div class="flex flex-col px-6 py-5 bg-gray-50">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label for="name" class="mb-2 font-semibold text-gray-700">Titulo </label>   
                        <input type="text" class="bg-white border border-gray-200 rounded shadow-sm form-input block w-full p-2 mx-1 sm:text-sm sm:leading-5" placeholder="Ingrese el nombre" name="name" id="name">
                    </div>

                    <div class="flex flex-col">
                        <label for="category" class="mb-2 font-semibold text-gray-700">Categoría </label>
                        <select class="col-span-5 form-input block w-full border border-gray-200 rounded shadow-sm bg-white p-2 sm:text-sm sm:leading-5" name="category" id="category">
                            <option value="Ofertas" selected>Ofertas</option>
                            <option value="Pizzas">Pizzas</option>
                            <option value="Pastas">Pastas</option>
                            <option value="Bebidas">Bebidas</option>
                            <option value="Adicionales">Adicionales</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex flex-col mt-4">
                    <label for="description" class="mb-2 font-semibold text-gray-700">Descripción</label>
                    <textarea
                    type="text"
                    name="description"
                    placeholder="Escriba la descripción del plato..."
                    class="p-5 mb-5 whitespace-pre-line bg-white border border-gray-200 rounded shadow-sm h-32 w-full"
                    id="description"
                    ></textarea>
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <div class="flex flex-col">
                        <label for="price_normal" class="mb-2 font-semibold text-gray-700">Precio Regular </label>   
                        <input type="number" min="0.00" max="10000.00" step="0.01"  class="bg-white border border-gray-200 rounded shadow-sm form-input block w-full p-2 mx-1 sm:text-sm sm:leading-5" placeholder="S/." name="price_normal" id="price_normal">
                    </div>

                    <div class="flex flex-col">
                        <label for="price_familiar" class="mb-2 font-semibold text-gray-700">Precio Familiar </label>   
                        <input type="number" min="0.00" max="10000.00" step="0.01" class="bg-white border border-gray-200 rounded shadow-sm form-input block w-full p-2 mx-1 sm:text-sm sm:leading-5" placeholder="S/. " name="price_familiar" id="price_familiar">
                    </div>

                    <div class="flex flex-col col-span-2">
                        <label for="file">Imagen: </label>
                        <input type="file" class="form-input block w-full p-2 m-1 sm:text-sm sm:leading-5" placeholder="Ingrese imagen" name="file" id="file">  
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row items-center justify-between p-2 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
            <p><img src="{{ asset('image/pizza2.svg') }}" class="w-8 h-8"></p>
            <button type="submit" class="w-32 px-4 py-2 text-white font-semibold bg-primero-500 rounded">
            Registrar
            </button>
        </div>
    </form>
</div>


