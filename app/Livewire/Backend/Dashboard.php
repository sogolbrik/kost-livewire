<?php

namespace App\Livewire\Backend;

use App\Models\Bedroom;
use App\Models\Transaction;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Dashboard extends Component
{
    #[Title('Admin Dashboard')]
    #[Layout('livewire.backend.template.main')]

    public $transaction, $sale, $revenue, $customer, $available;

    public function mount()
    {
        $this->transaction = Transaction::latest()->get();
        $this->sale        = Bedroom::where('status', 'occupied')->count();
        $this->available   = Bedroom::where('status', 'available')->count();
        $this->revenue     = Bedroom::where('status', 'occupied')->sum('price');
        $this->customer    = User::where('status', 'active')->count();
    }

    public function render()
    {
        return view('livewire.backend.dashboard');
    }
}
