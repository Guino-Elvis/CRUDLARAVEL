<?php

namespace App\Http\Livewire;

use App\Models\Elemento;
use Livewire\Component;

class CrudElemento extends Component
{
    public $isOpen = false;
    public $search, $elemento;

    protected $listeners = ['render', 'delete' => 'delete'];
    protected $rules=[
        'elemento.numserie' => 'required',
        'elemento.cantidad' => 'required',
        'elemento.baja' => 'required',
        'elemento.fechabaja' => 'required',
        'elemento.motivobaja' => 'required',
        'elemento.codigobarra' => 'required',
        'elemento.ubicacions_id' => 'required',
    ];
    public function render()
    {
        $elementos=Elemento::where('numserie','like','%'.$this->search.'%')->paginate();
        return view('livewire.crud-elemento',compact('elementos'));
    }

    public function create()
    {
        $this->isOpen = true;
    }


    public function store()
    {
        $this->validate();

        if (!isset($this->elemento['id'])) {
            Elemento::create($this->elemento);
        } else {
            $elemento = Elemento::find($this->elemento['id']);
            $elemento->last_update = $this->elemento['numserie'];
            $elemento->last_update = $this->elemento['cantidad'];
            $elemento->last_update = $this->elemento['baja'];
            $elemento->last_update = $this->elemento['motivobaja'];
            $elemento->last_update = $this->elemento['codigobarra'];
            $elemento->last_update = $this->elemento['last_update'];
            $elemento->films_id = $this->elemento['ubicacions_id'];
            $elemento->save();
        }

        $this->reset(['isOpen', 'elemento']);
        $this->emitTo('CrudElemento', 'render');
    }

    public function delete(Elemento $item)
    {
        $item->delete();
    }

    public function edit($elemento)
    {
        $this->elemento = $elemento;
        $this->isOpen = true;
    }
}
