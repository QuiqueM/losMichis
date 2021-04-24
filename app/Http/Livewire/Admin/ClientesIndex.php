<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;

class ClientesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    /**Restablacer las paginas para que busque desde la primera */
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $clientes = Cliente::where('nombre', 'LIKE','%'.$this->search .'%')
                        ->orWhere('correo', 'LIKE','%'.$this->search .'%')
                        ->paginate(10);
        return view('livewire.admin.clientes-index', compact('clientes'));
    }
}
