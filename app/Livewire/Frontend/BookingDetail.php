<?php

namespace App\Livewire\Frontend;

use App\Models\Bedroom;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class BookingDetail extends Component
{
    // use WithFileUploads;
    #[Title('Detail Kamar')]
    #[Layout('livewire.frontend.template.main-booking')]

    // Property
    public $bedId, $entering_room, $duration = '';

    // Validation
    protected $rules = [
        'entering_room' => 'required',
        'duration'      => 'required|integer|in:1,3,6',
    ];

    public function mount($bedId)
    {
        $this->bedId = Bedroom::with('bedroomDetail')->find($bedId);
    }

    public function sessionTransaction()
    {
        $this->validate();
        
        $totalPrice = $this->duration * $this->bedId->price;
        
        Session::put('transaction', [
            'bedroom_id'    => $this->bedId->id,
            'entering_room' => $this->entering_room,
            'duration'      => $this->duration,
            'price'         => $this->bedId->price,
            'total_price'   => $totalPrice,
        ]);

        $this->redirectRoute('transaction.form', navigate: true);
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.frontend.booking-detail');
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
use App\Models\Bedroom;
use Livewire\Component;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;
use WithPagination;
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
*/
}
