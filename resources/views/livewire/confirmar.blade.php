
<div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
    <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold text-gray-500">¿ Estas seguro de eliminar ?</p>
            </div>
            <!--Body-->
            <div class="my-5 mr-5 ml-5 flex justify-center">
                <form>
                    <div class="">
                       
                    </div>
                </form>
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2 space-x-14">
                <button
                   wire:click.prevent="cerrarModal()" class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold">Cancelar</button>
                <button
                wire:click.prevent="eliminar({{$producto->id}})" class="px-4 bg-gray-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Eliminar</button>
            </div>
        </div>
    </div>
</div>