<?php

namespace App\Livewire\Backend\Template;

use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.backend.template.navbar');
    }
}
