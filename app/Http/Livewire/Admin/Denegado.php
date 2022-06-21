<?php

namespace App\Http\Livewire\Admin;

use App\Models\Usuario;
use Livewire\Component;

class Denegado extends Component
{
    public $estado;
    public function render()
    {
        $usuarios = ($this->cargado == true) ? Usuario::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.admin.denegado', $usuarios);
    }

    public function crear($id)
    {
        $this->validate();
        Usuario::find($id)->fill(['estado' => 0])->save();
        $this->emit('alert-user-create', 'Has registrado a un nuevo usuario correctamente');
        return redirect(route('admin.usuarios'));
    }
}
