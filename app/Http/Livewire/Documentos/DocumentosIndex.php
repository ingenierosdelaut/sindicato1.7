<?php

namespace App\Http\Livewire\Documentos;

use App\Models\Documento;
use Livewire\Component;

class DocumentosIndex extends Component
{
    public function render()
    {
        $documentos = Documento::all();
        return view('livewire.documentos.documentos-index', compact('documentos'));
    }
}
