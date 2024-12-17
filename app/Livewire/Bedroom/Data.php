<?php

namespace App\Livewire\Bedroom;

use App\Models\Bedroom;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Data extends Component
{
    #[Title('Bedroom')]
    #[Layout('livewire.backend.template.main')]

    
    public function render()
    {
        return view('livewire.bedroom.data', [
            'bedroom' => Bedroom::with('bedroomDetail')->get()
        ]);
    }

    public function destroy($id)
    {
        $bedroom = Bedroom::find($id);
        Storage::disk('public')->delete($bedroom->photo);

        $bedroom->delete();
    }
}
