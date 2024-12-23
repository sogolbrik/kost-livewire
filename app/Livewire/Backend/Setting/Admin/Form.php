<?php

namespace App\Livewire\Backend\Setting\Admin;

use App\Models\User;
use Livewire\Component;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Form extends Component
{
    // use WithFileUploads;
    #[Title('Setting Admin')]
    #[Layout('livewire.backend.template.main')]

    // Property
    public $name ,$phone ,$email, $adminId;
    // Validation
    protected $rules = [
        'name'  => 'required',
        'phone' => 'required',
        'email' => 'sometimes|email|unique:users,email',
    ];

    public function mount($adminId = NULL)
    {
        if ($adminId) {
            $user = User::find($adminId);
            if ($user) {
                $this->adminId = $user->id;
                $this->name     = $user->name;
                $this->phone    = $user->phone;
                $this->email    = $user->email;
            }
        }
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();

        User::updateorCreate(
            ['id' => $this->adminId],
            [
                'name'  => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
            ]
        );
        session()->flash('success-message', 'Successfully');
        $this->redirectRoute('userAdmin.data', navigate: true);
    }

    public function render()
    {
        return view('livewire.backend.setting.admin.form');
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
*/
}
