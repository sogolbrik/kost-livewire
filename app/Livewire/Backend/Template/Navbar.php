<?php

namespace App\Livewire\Backend\Template;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Navbar extends Component
{
    public $photo, $adminId;

    public function mount(){
        $this->adminId = User::find(Auth::user()->id);
        $this->photo   = $this->adminId->photo;
    }

    public function render()
    {
        return view('livewire.backend.template.navbar');
    }
}
