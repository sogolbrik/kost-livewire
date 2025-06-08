<?php

namespace App\Livewire\Frontend\Setting\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Form extends Component
{
    use WithFileUploads;

    // Property
    public $name, $phone, $email, $user, $photo, $address, $city, $state;

    
    // Validation
    public function rules()
    {
        return [
            'name'    => 'required',
            'address' => 'required',
            'city'    => 'required',
            'state'   => 'required',
            'phone'   => 'required|numeric',
            'email'   => 'required|email|unique:users,email,' . $this->user->id,
            'photo'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
        ];
    }

    public function mount()
    {
        $this->user    = User::find(Auth::user()->id);
        $this->name    = $this->user->name;
        $this->phone   = $this->user->phone;
        $this->email   = $this->user->email;
        $this->photo   = $this->user->photo;
        $this->address = $this->user->address;
        $this->city    = $this->user->city;
        $this->state   = $this->user->state;
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update()
    {
        $data = $this->validate();

        if ($this->photo) {
            $photoUser = $this->photo->getClientOriginalName();
            $photoPath = $this->photo->storePubliclyAs('profile', $photoUser, 'public');
            if ($this->user->photo) {
                Storage::disk('public')->delete($this->user->photo);
            }
            $data['photo'] = $photoPath;
        }

        $this->user->update($data);

        session()->flash('success-message', 'Berhasil');
        $this->redirectRoute('customer.profile', navigate: true);
    }

    public function deletePhoto()
    {
        if ($this->user->photo) {
            Storage::disk('public')->delete($this->user->photo);
            $this->user->update(['photo' => null]);
        }
        $this->photo = null;
    }

    public function render()
    {
        return view('livewire.frontend.setting.profile.form');
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
