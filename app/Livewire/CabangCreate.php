<?php

namespace App\Livewire;

// use Illuminate\Http\Client\Request;
use LivewireUI\Modal\ModalComponent;
use App\Models\cabang;

class CabangCreate extends ModalComponent
{

    public $nama_cabang = '';
    public function render()
    {
        return view('livewire.cabang-create');
    }

    public function save()
    {        
        cabang::create([
            'nama_cabang' => $this->nama_cabang,
            
        ]);
        return redirect()->to('/cabang')->with('status', 'Post successfully created.');;
    }
}
