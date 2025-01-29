<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Daftar extends Component
{
    // use WithFileUploads;
    #[Title('Register')]
    #[Layout('livewire.auth.main-masuk')]

    // Property
    public $name, $password, $email, $password_confirmation;

    // Validation
    protected $rules = [
        'name'     => 'required|min:4',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:4',
    ];

    public function mount()
    {
        // mount some variable
    }

    public function register()
    {
        $validation = $this->validate();

        $validation['password'] = password_hash($validation['password'], PASSWORD_BCRYPT);

        User::create($validation);

        session()->flash('success-message', 'Akun berhasil dibuat. silakan isi data pribadi Anda!');

        if (Auth::attempt(['name' => $this->name, 'password' => $this->password])) {
            $this->redirectIntended('/');
        }

        $this->redirectIntended('biodata');
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function isValid($field)
    {
        if ($this->getErrorBag()->has($field)) {
            return 'is-invalid';
        }

        return isset($this->$field) ? 'is-valid' : '';
    }

    //
    public bool $isFocusedUser = false;

    public function setFocusUser($state)
    {
        $this->isFocusedUser = $state;
    }

    public bool $isFocusedEmail = false;

    public function setFocusEmail($state)
    {
        $this->isFocusedEmail = $state;
    }

    public bool $isFocusedPass = false;

    public function setFocusPass($state)
    {
        $this->isFocusedPass = $state;
    }

    public bool $isFocusedRePass = false;

    public function setFocusRePass($state)
    {
        $this->isFocusedRePass = $state;
    }
    //

    public function render()
    {
        return view('livewire.auth.daftar');
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
