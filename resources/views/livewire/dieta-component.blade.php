<div>
    <button type="button"
            class="ml-[300px] mt-4 text-sm bg-green-500 hover:bg-green-700 text-white py-3 px-2 rounded focus:outline-none focus:shadow-outline"
            wire:click="openCreateModal">
            Nuevo
        </button>
    
    <table class="w-[1300px] text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ml-[110px] mt-[50px]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    id
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Cantidad de calorias
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Fecha
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Botones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dieta as $dieta)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                        {{ $dieta->id }}
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{ $dieta->title }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $dieta->description }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $dieta->totalCalories }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $dieta->date }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{-- <button type="button"
                        class="text-white bg-gradient-to-r from-blue-600 via-blue-500 to-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                            width="20px" fill="#e8eaed">
                            <path
                                d="M840-680v480q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h480l160 160Zm-80 34L646-760H200v560h560v-446ZM480-240q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35ZM240-560h360v-160H240v160Zm-40-86v446-560 114Z" />
                        </svg></button>

                        <button type="button"
                        class="text-white bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 shadow-lg shadow-yellow-500/50 dark:shadow-lg dark:shadow-yellow-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                            width="20px" fill="#e8eaed">
                            <path
                                d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg></button> --}}

                        <button wire:click="openCreateModal({{ $dieta }})" type="button"
                            class="text-white bg-gradient-to-r from-green-600 via-green-500 to-green-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 mx-auto me-2 mb-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#e8eaed">
                                <path
                                    d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                            </svg>

                            <button wire:click="deleteDieta({{ $dieta }})" type="button" 
                                class="text-white bg-gradient-to-r from-red-600 via-red-500 to-red-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#e8eaed">
                                    <path
                                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                </svg>

                                <button wire:click="openViewModal({{ $dieta }})" type="button"
                                    class="text-white bg-gradient-to-r from-purple-600 via-purple-500 to-purple-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#e8eaed">
                                        <path
                                            d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z" />
                                    </svg>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <!--Fin de la tabla-->

    <!--modal-->

    @if ($modal)
    <div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
        <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
            <div class="w-full">
                <div class="m-8 my-20 max-w-[400px] mx-auto">
                    <div class="mb-8">
                        <h1 class="text-xl mb-4 font-bold text-slate-500">
                            {{ isset($miTarea->id) ? 'Edicion de' : 'Creación de' }} tarea</h1>
                        <form>
                            <div class="mb-4">
                                <label for="user_id" class="block text-gray-700 font-bold mb-2">Id:</label>
                                <input wire:model="user_id" type="text" id="user_id" name="user_id"
                                    class="w-full border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="title"
                                    class="block text-gray-700 font-bold mb-2">Title:</label>
                                <input wire:model="title" id="title" name="title"
                                    class="w-full border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></input>
                            </div>
                            <div class="mb-4">
                                <label for="description"
                                    class="block text-gray-700 font-bold mb-2">Descripcion:</label>
                                <input wire:model="description" id="description" name="description"
                                    class="w-full border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></input>
                            </div>
                            <div class="mb-4">
                                <label for="totalCalories"
                                    class="block text-gray-700 font-bold mb-2">calories:</label>
                                <input wire:model="totalCalories" id="totalCalories" name="totalCalories"
                                    class="w-full border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></input>
                            </div>
                            <div class="mb-4">
                                <label for="date"
                                    class="block text-gray-700 font-bold mb-2">Date:</label>
                                <input wire:model="date" id="date" name="date"
                                    class="w-full border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></input>
                            </div>
                        </form>

                    </div>
                    <div class="space-y-4 flex flex-row gap-4">
                        <button class="p-3 bg-black rounded-full text-white w-full font-semibold"
                            wire:click="createorUpdateDieta">
                            {{ isset($miDieta->id) ? 'Actualizar' : 'Crear' }} dieta
                        </button>
                        <button class="p-3 bg-black rounded-full text-white w-full font-semibold"
                            wire:click="closeCreateModal">
                            Cancelar Tarea
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    @endif

    <!--Modal para el view-->
    {{-- Modal de visualización de información --}}
@if($viewModal)
<div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
    <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
        <div class="w-full">
            <div class="m-8 my-20 max-w-[400px] mx-auto">
                <div class="mb-8">
                    <h1 class="mb-4 text-3xl font-extrabold">Diet Information</h1>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Id:</label>
                        <p class="text-gray-700">{{ $viewDieta['user_id'] }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Title:</label>
                        <p class="text-gray-700">{{ $viewDieta['title'] }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Description:</label>
                        <p class="text-gray-700">{{ $viewDieta['description'] }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Calories:</label>
                        <p class="text-gray-700">{{ $viewDieta['totalCalories'] }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Date:</label>
                        <p class="text-gray-700">{{ $viewDieta['date'] }}</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <button class="p-3 bg-white border rounded-full w-full font-semibold" wire:click="closeViewModal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</div>
