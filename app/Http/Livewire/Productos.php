<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    public $productos,$descripcion, $cantidad, $id_producto;
    public $modal = false;
    public $confirmar = false;
    
    public function render()
    {
        $this->productos = Producto::all();
        
        return view('livewire.productos');
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal(){
        $this->modal = true;
    }

    public function abrirConfirmar(){
        $this->confirmar();
    }

    public function confirmar(){
        $this->confirmar = true;
    }

    public function cerrarModal(){
        $this->modal = false;
        $this->confirmar = false;
    }

    public function limpiarCampos(){
        $this->id_producto = "";
        $this->descripcion = "";
        $this->cantidad = "";
    }

    public function editar($id){

        $producto = Producto::findOrFail($id);
        $this->id_producto = $id;
        $this->descripcion = $producto->descripcion;
        $this->cantidad = $producto->cantidad;
        $this->abrirModal();
    }

    public function eliminar($id){
        Producto::find($id)->delete();
        session()->flash('message', 'Registro eliminado con exito');
        $this->cerrarModal();
    }

    public function guardar(){
        Producto::updateOrCreate(['id'=>$this->id_producto],
        [
            'descripcion'=>$this->descripcion,
            'cantidad'=>$this->cantidad
        ]);

        session()->flash('message',
            $this->id_producto ? '! Actualizacion exitosa' : 'Registro exitoso' );

        $this->limpiarCampos();
        $this->cerrarModal();
    }
}
