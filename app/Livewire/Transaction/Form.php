<?php

namespace App\Livewire\Transaction;

use App\Models\Fintech;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Form extends Component
{
    use WithFileUploads;
    #[Title('Pembayaran')]
    #[Layout('livewire.frontend.template.main-booking')]

    // Property
    public $user_id, $bedroom_id, $payment_date, $transaction, $payment_proof, $fintech;
    
    // Validation
    protected $rules = [
        'payment_proof' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
    ];

    public function mount()
    {
        $this->transaction = Session::get('transaction');
        $this->fintech     = Fintech::get();
    }

    public function store()
    {
        // Check if the user already has a pending transaction
        $pendingTransaction = Transaction::where('user_id', Auth::id())
            ->where('status', 'Ditunda')
            ->first();

        if ($pendingTransaction) {
            session()->flash('error-message', 'Anda sudah memiliki transaksi yang sedang menunggu konfirmasi.');
            return;
        }

        $data = $this->validate();

        $fileName = rand(100, 999) . date("ymdHis") . "." . $this->payment_proof->getClientOriginalExtension();
        $data["payment_proof"] = $this->payment_proof->storePubliclyAs('payment', $fileName, 'public');

        Transaction::create([
            'user_id'        => Auth::id(),
            'bedroom_id'     => $this->transaction['bedroom_id'],
            'payment_date'   => date('Y-m-d'),
            'billing_period' => date('Y-m'),
            'code'           => "KOS-" . date('ymdHis') . rand(10, 99),
            'payment_proof'  => $data["payment_proof"],
            'entering_room'  => $this->transaction['entering_room'],
            'duration'       => $this->transaction['duration'],
            'price'          => $this->transaction['price'],
        ]);

        // Hapus session
        Session::forget('transaction');

        session()->flash('success-message', 'Pembayaran berhasil, silahkan tunggu konfirmasi dari admin');
        $this->redirectRoute('transaction.detail', navigate: true);
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function isValid($field)
    {
        if ($this->getErrorBag()->has($field)) {
            return 'border-danger';
        }

        return isset($this->$field) ? 'border-success' : '';
    }

    public function render()
    {
        return view('livewire.transaction.form');
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
