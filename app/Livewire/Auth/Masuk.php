<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Masuk extends Component
{
    // use WithFileUploads;
    #[Title('Login')]
    #[Layout('livewire.auth.main-masuk')]

    // Property
    public $name, $password;

    // Validation
    protected $rules = [
        'name'     => 'required|string|min:4',
        'password' => 'required|min:4',
    ];

    public function mount()
    {
        // mount some variable
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['name' => $this->name, 'password' => $this->password])) {

            $user = Auth::user();
            if ($user->role == 'customer') {
                if ($user->bedroom_id == NULL) {
                    session()->flash('success-message', 'Berhasil login, silahkan pilih kamar');
                    $this->redirectIntended('/');
                } else {
                    //redirect ke halaman kamar customer
                    $this->redirectIntended('kamar-ku');
                    session()->flash('success-message', 'Berhasil Login!');
                }
            } elseif ($user->role == 'administrator') {
                session()->flash('success-message', 'Berhasil Login!');
                $this->redirectIntended('admin-dashboard');
            }
        } else {
            session()->flash('error-message', 'Login gagal, periksa username atau password anda');
        }
    }

    public bool $isFocused = false;

    public function setFocus($state)
    {
        $this->isFocused = $state;
    }

    public bool $isFocusedPass = false;

    public function setFocusPass($state)
    {
        $this->isFocusedPass = $state;
    }

    public function isValid($field)
    {
        if ($this->getErrorBag()->has($field)) {
            return 'is-invalid';
        }

        return isset($this->$field) ? 'is-valid' : '';
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.auth.masuk');
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
