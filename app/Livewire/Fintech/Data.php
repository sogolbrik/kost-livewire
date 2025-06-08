<?php

namespace App\Livewire\Fintech;

use App\Models\Fintech;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Data extends Component
{
    #[Title('Rekening')]
    #[Layout('livewire.backend.template.main')]
    public $fintech;

    public function mount()
    {
        $this->loadFintech();
    }
    
    public function loadFintech(){
        $this->fintech = Fintech::latest()->get();
    }

    public function render()
    {
        return view('livewire.fintech.data');
    }

    #[On('destroy')]
    public function destroy($id){
        $fintech = Fintech::find($id);
        Storage::disk('public')->delete($fintech->photo);
        $fintech->delete();
        $this->loadFintech();
        session()->flash('success-message', 'Berhasil Dihapus');
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
