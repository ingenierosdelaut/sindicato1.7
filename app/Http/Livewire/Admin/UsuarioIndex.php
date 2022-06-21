<?php

namespace App\Http\Livewire\Admin;

use App\Models\Usuario;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;

class UsuarioIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $cargado = false;
    public $estado;

    public function mount()
    {
        $this->usuario = new Usuario();
    }

    public function render()
    {
        $usuarios = ($this->cargado == true) ? Usuario::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('departamento', 'LIKE', '%' . $this->search . '%')
            ->orwhere('apellido', 'LIKE', '%' . $this->search . '%')
            ->orwhere('estado', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.admin.usuario-index', compact('usuarios'));
    }

    public function generarPDF()
    {
        $usuarios = Usuario::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('livewire.admin.pdfUsers', ['usuarios' => $usuarios]);
        return $pdf->stream();
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function disable($id)
    {
        $this->emit('alert-user-disabled', 'Este usuario ha sido inhabilitado');
        Usuario::find($id)->fill(['estado' => 0])->save();
    }

    public function enable($id)
    {
        $this->emit('alert-user-enable', 'Has habilitado correctamente al usuario');
        Usuario::find($id)->fill(['estado' => 1])->save();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected function rules()
    {
        return ReglaEstado::reglas();
    }
}
