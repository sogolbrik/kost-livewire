<?php

namespace App\Livewire\Transaction;

use App\Models\Fintech;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class FormPeriod extends Component
{
    use WithFileUploads;
    #[Title('Yuk Perpanjang')]
    #[Layout('livewire.frontend.template.main-customer')]

    // Property
    public $fintech, $user_id, $bedroom_id, $payment_date, $billing_period, $payment_proof, $duration = "", $status_payment;

    // Validation
    protected $rules = [
        'duration'      => 'required|integer|in:1,3,6',
        'payment_proof' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
    ];

    public function mount()
    {
        $this->fintech = Fintech::get();
        $this->user_id = Auth::id();
    }

    public function store(){
        $data = $this->validate();

        $fileName = rand(100,999).date("ymdHis").".".$this->payment_proof->getClientOriginalExtension();
        $data["payment_proof"] = $this->payment_proof->storePubliclyAs('payment', $fileName, 'public');
        
        $user = User::find($this->user_id);
        
        Transaction::create([
            'user_id'        => $this->user_id,
            'bedroom_id'     => $user->bedroom_id,
            'payment_date'   => date('Y-m-d'),
            'billing_period' => date('Y-m'),
            'payment_proof'  => $data["payment_proof"],
            'duration'       => $this->duration,
            'status'         => 'pending',
            'status_payment' => 'old',
        ]);

        session()->flash('success-message', 'Pembayaran berhasil, silahkan tunggu konfirmasi dari admin');
        $this->redirectRoute('customer.page', navigate: true);

    }

    public function isValid($field)
    {
        if ($this->getErrorBag()->has($field)) {
            return 'border-danger';
        }

        return isset($this->$field) ? 'border-success' : '';
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.transaction.form-period');
    }

/*
    Just Delete This If You Pro...

    Title / Judul
        use Livewire\Attributes\Title;
        #[Title('Judul_cerita_sedihmu')]

    Layouts / Templating
        use Livewire\Attributes\Layout;
        #[Layout('layouts.app')]

    Antisipasi Perubahan dari view
        use Livewire\Attributes\Locked;
        #[Locked]
        public $id;
    
    Penggunaan dispatch untuk mengirim sinyal ke componen lain agar bisa bereaksi
        Component A
        $this->dispatch('post-created', title: $post->title);

        Component B
        use Livewire\Attributes\On;
        #[On('post-created')] 
        public function someFunction($title){}

    Redirect / Pindah halaman
        return $this->redirect('/posts', navigate: true);
    
    Validation / Validasi
        use Livewire\Attributes\Validate;
        #[Validate('required|image')] 
        public $photo = '';

        atau

        protected $rules = [
            'email'    => 'required',
            'password' => 'required|min:3',
        ];

    Pagination
        use Livewire\WithPagination;
            class someClass extends Component{
                use WithPagination;
            }
        {{ $someVariable->links() }}  => in view

    Add Variable Search On Url
        use Livewire\Attributes\Url;
        #[Url(except: '')]
        public string $search; 

        => penambahan except agar saat tidak ada yang di serch url tetap bersih
    
    Search Table
        public $search;

        public function updatingSearch(){
            $this->resetPage();
        }

        public function render()
        {
            return view('livewire.student-data', [
                'variable' => Model::where('coloumn', 'like', '%'.$this->search.'%')->get()
            ]);
        }

    Is valid & invalid
        public function isValid($field)
        {
            if ($this->getErrorBag()->has($field)) {
                return 'is-invalid';
            }

            return isset($this->$field) ? 'is-valid' : '';
        }
    custom message validation
    protected $messages = [
        'name'        => 'nama harus diisi',
        'price'       => 'harga harus diisi',
        'photo'       => 'gambar waib diisi',
        'type'        => 'tipe harus diisi',
    ];
*/
}
