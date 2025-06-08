<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Biodata extends Component
{
    use WithFileUploads;
    #[Title('Biodata')]
    #[Layout('livewire.backend.template.auth')]

    // Property
    public $userid, $phone, $address, $city, $state, $ktp;
    // Validation
    protected $rules = [
        'phone'   => 'required',
        'address' => 'required',
        'city'    => 'required',
        'state'   => 'required',
        'ktp'     => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
    ];

    public $currentStep = 1;
    public function nextStep()
    {
        $this->validate();
        $this->currentStep = 2;
    }

    public function prevStep()
    {
        $this->currentStep = 1;
    }


    public function mount()
    {
        $this->userid = Auth::id();
    }

    public function store()
    {
        $data = $this->validate();

        $fileName = "ktp-" . rand(10, 999) . $this->ktp->getClientOriginalExtension();
        $data["ktp"] = $this->ktp->storePubliclyAs('ktp', $fileName, 'public');

        User::find($this->userid)->update($data);

        session()->flash('success-message', 'Data diri berhasil diupdate');
        $this->redirectIntended('/');
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.auth.biodata');
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
