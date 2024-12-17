<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Register extends Component
{
    // use WithFileUploads;
    #[Title('Register')]
    #[Layout('livewire.backend.template.auth')]

    // Property
    public $name, $email, $password, $password_confirmation;

    // Validation
    protected $rules = [
        'name'     => 'required',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:4',
    ];

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register(){
        $validation = $this->validate();

        $validation['password'] = password_hash($validation['password'], PASSWORD_BCRYPT);

        User::create($validation);

        session()->flash('success-message', 'Account created successfully. Welcome to your dashboard!');
        $this->redirectIntended('admin-dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register');
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
*/
}
