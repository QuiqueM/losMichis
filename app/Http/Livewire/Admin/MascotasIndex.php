<?php

namespace App\Http\Livewire\Admin;

use App\Models\Mascota;
use Livewire\Component;
use Livewire\WithPagination;

class MascotasIndex extends Component
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
        $mascotas = Mascota::where('nombre', 'LIKE','%'.$this->search .'%')
                            ->paginate(10);

        return view('livewire.admin.mascotas-index', compact('mascotas'));
    }
}
