<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Anuncio;
use App\Models\Usuario;
use Livewire\WithPagination;

class AdminView extends Component
{
    use WithPagination;
    public $cargado = false;
    public $search = '';

    public function mount()
    {
        $this->usuario = new Usuario();
    }

    public function render()
    {
        $anuncios = Anuncio::join('usuarios', 'id_usuario', '=', 'usuarios.id')
            ->where('titulo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('contenido', 'LIKE', '%' . $this->search . '%')
            ->select(
                'anuncios.*',
                'usuarios.nombre'
            )->latest()->paginate(10);
        $anunciosorder = Anuncio::idDescending()->get();
        return view('livewire.admin.admin-view', compact('anuncios', 'anunciosorder'));
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
