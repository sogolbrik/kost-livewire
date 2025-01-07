<?php

namespace App\Livewire\Backend;

use App\Models\Bedroom;
use Livewire\Component;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Dashboard extends Component
{
    #[Title('Admin Dashboard')]
    #[Layout('livewire.backend.template.main')]

    public function render()
    {
        return view('livewire.backend.dashboard', [
            'tes' => Bedroom::get()
        ]);
    }
}
