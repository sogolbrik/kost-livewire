<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Form extends Component
{
    // use WithFileUploads;
    #[Title('User Form')]
    #[Layout('livewire.backend.template.main')]

    // Property
    public $name, $email, $password, $userId;

    // Validation
    protected $rules = [
        'name'     => 'required',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:4',
    ];

    public function mount($userId = NULL)
    {
        if ($userId) {
            $user = User::find($userId);
            if ($user) {
                $this->userId   = $user->id;
                $this->name     = $user->name;
                $this->email    = $user->email;
                $this->password = $user->password;
            }
        }
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validation = $this->validate();

        $hashPass = $this->password ? password_hash($validation['password'], PASSWORD_BCRYPT) : User::find($this->userId)?->password;

        User::updateorCreate(
            ['id' => $this->userId],
            [
                'name'     => $this->name,
                'email'    => $this->email,
                'password' => $hashPass,
            ]
        );
        session()->flash('success-message', 'Successfully');
        $this->redirectRoute('user.data', navigate: true);
    }

    public function render()
    {
        return view('livewire.user.form');
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
