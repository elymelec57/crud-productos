<x-slot name="header">
    <h1 class="text-gray-900">CRUD con laravel 8 y livewire</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-write overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
            <div class="bg-teal-100 rouded-d tetx-teal-900 px-4 py-4 shadow-md my-3">
                <div class="flex">
                    <div>
                        <h4>{{session('message')}}</h4>
                    </div>
                </div>
            </div>  
        @endif
            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
            @if ($modal)
                @include('livewire.crear')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DESCRIPCION</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td class="border px-4 py2">{{$producto->id}}</td>
                        <td class="border px-4 py2">{{$producto->descripcion}}</td>
                        <td class="border px-4 py2">{{$producto->cantidad}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$producto->id}})" class="px-4 bg-blue-500 p-3 ml-3 text-white hover:bg-teal-400">Editar</button>
                            <button  wire:click="abrirConfirmar()" class="px-4 bg-gray-500 p-3 ml-3 text-white hover:bg-teal-400">Eliminar</button> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
             @if ($confirmar)
                 @include('livewire.confirmar')
            @endif
        </div>
    </div>
</div>