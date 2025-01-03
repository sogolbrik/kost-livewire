<?php

namespace App\Livewire\Fintech;

use App\Models\Fintech;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Form extends Component
{
    use WithFileUploads;
    #[Title('Fintech Form')]
    #[Layout('livewire.backend.template.main')]

    // Property
    public $name, $photo, $description, $fintechId, $fintech;

    // Validation
    protected $rules = [
        'name'        => 'required',
        'photo'       => 'required|image|mimes:jpeg,png,jpg,webp|max:1024',
        'description' => 'required',
    ];

    public function mount($fintechId = NULL)
    {
        if ($fintechId) {
            $this->fintech = Fintech::find($fintechId);
            $fintech = Fintech::find($fintechId);
            if ($fintech) {
                $this->fintechId   = $fintech->id;
                $this->name        = $fintech->name;
                $this->photo       = $fintech->photo;
                $this->description = $fintech->description;
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
        $this->validate();

        if ($this->photo) {
            $photoFint = $this->photo->getClientOriginalName();
            $photoPath = $this->photo->storePubliclyAs('fintech', $photoFint, 'public');
        } else {
            $photoPath = $this->photo;
        }

        Fintech::updateOrCreate(
            ['id' => $this->fintechId],
            [
                'name'        => $this->name,
                'photo'       => $photoPath,
                'description' => $this->description,
            ]
        );

        session()->flash('success-message', 'Successfully');
        $this->redirectRoute('fintech.data', navigate: true);
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
        return view('livewire.fintech.form');
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
