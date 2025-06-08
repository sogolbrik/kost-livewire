<?php

namespace App\Livewire\Bedroom;

use App\Models\Bedroom;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Data extends Component
{
    #[Title('Kamar')]
    #[Layout('livewire.backend.template.main')]

    public $bedroom;

    public function mount()
    {
        $this->loadBedroom();
    }
    
    public function loadBedroom (){
        $this->bedroom = Bedroom::with('bedroomDetail')->latest()->get();
    }

    
    public function render()
    {
        return view('livewire.bedroom.data');
    }

    #[On('destroy')]
    public function destroy($id)
    {
        $bedroom = Bedroom::findOrFail($id);
        Storage::disk('public')->delete($bedroom->photo);

        $bedroom->delete();
        $this->loadBedroom();
        session()->flash('success-message', 'Berhasil Dihapus');
    }
}
