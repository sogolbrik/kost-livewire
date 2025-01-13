<?php

namespace App\Livewire\User;

use App\Models\Bedroom;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
// use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Data extends Component
{
    // use WithFileUploads; 
    use WithPagination;

    #[Title('User')]
    #[Layout('livewire.backend.template.main')]

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function inactiveUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $bedroom = Bedroom::find($user->bedroom_id);
            if ($bedroom) {
                $bedroom->status = 'available';
                $bedroom->save();
            }
            $user->bedroom_id = NULL;
            $user->check_in   = NULL;
            $user->status     = 'inactive';
            $user->save();
        }

        session()->flash('success-message', 'User has been inactive');

    }

    public function render()
    {
        return view('livewire.user.data', [
            'user' => User::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function destroy($id)
    {
        User::destroy($id);
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
