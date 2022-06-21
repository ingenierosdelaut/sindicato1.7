<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Requests\ReglasMotivo;
use App\Http\Livewire\Requests\RulesRequest;
use App\Models\Request;
use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class Solicitud extends Component
{
    use WithPagination;
    public Request $request;
    public $estado;
    protected $paginationTheme = 'bootstrap';
    public $cargado = false;
    public $search = '';

    public function mount()
    {
        $this->request = new Request();
    }
    public function render()
    {
        $requests = Request::join('usuarios', 'id_usuario', '=', 'usuarios.id')
            ->where('nombre', 'LIKE', 'F%' . $this->search . '%')
            ->orwhere('fecha', 'LIKE', '%' . $this->search . '%')
            ->select(
                'requests.*',
                'usuarios.nombre',
                'usuarios.apellido'
            )
            ->orderby('id', 'asc')
            ->paginate(10);
        return view('livewire.admin.solicitud', compact('requests'));
    }

    public function aceptar($id)
    {
        Request::find($id)->fill(['estado' => 1])->save();
    }

    // public function denegar($id)
    // {
    //     Request::find($id)->fill(['estado' => 2])->save();
    // }

    public function motivo($id)
    {
        $this->request->id_usuario = auth()->user()->id;
        if ($this->validate())
            Request::find($id)->fill(['estado' => 2]);
            $this->request->save();

    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected function rules()
    {
        return ReglasMotivo::reglas();
    }
}
