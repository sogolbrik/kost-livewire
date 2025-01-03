<?php

namespace App\Livewire\Bedroom;

use App\Models\Bedroom;
use App\Models\BedroomDetail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\{On, Url, Layout, Title, Locked, Validate};

class Form extends Component
{
    use WithFileUploads;
    #[Title('Bedroom Form')]
    #[Layout('livewire.backend.template.main')]


    // Property
    public $name, $price, $photo, $type = "", $description, $bedId, $bedroom, $facility = [];

    // Validation
    protected $rules = [
        'name'        => 'required',
        'price'       => 'required|numeric',
        'photo'       => 'required|image|mimes:jpeg,png,jpg,webp|max:1024',
        'type'        => 'required',
        'description' => 'sometimes',
        'facility'    => 'required|array',
    ];

    public function mount($bedId = NULL)
    {
        if ($bedId) {
            $this->bedId   = $bedId;
            $this->bedroom = Bedroom::find($bedId);
            $bedroom       = Bedroom::with('bedroomDetail')->find($bedId);
            if ($bedroom) {
                $this->bedId       = $bedroom->id;
                $this->name        = $bedroom->name;
                $this->price       = $bedroom->price;
                $this->photo       = $bedroom->photo;
                $this->type        = $bedroom->type;
                $this->description = $bedroom->description;
                $this->facility    = $bedroom->bedroomDetail->pluck('facility')->toArray();
            }
        }
    }

    // run on .live / .blur
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    //Mengisi facility sesuai dengan type menggunakan wire:change di view
    public function updateFacilities()
    {
        $this->facility = [];

        if ($this->type == 'Kamar Standar') {
            $this->facility = ['bed_pillow', 'wardrobe', 'desk_chair', 'bathroom', 'mirror', 'trash_bin', 'electricity', 'power_outlets', 'window_curtains', 'fan'];
        } elseif ($this->type == 'Kamar Mewah') {
            $this->facility = ['bed_pillow', 'wardrobe', 'desk_chair', 'bathroom', 'mirror', 'tv', 'wifi', 'trash_bin', 'electricity', 'window_curtains', 'power_outlets', 'shoe_rack', 'ac'];
        } elseif ($this->type == 'Kamar Istimewa') {
            $this->facility = ['bed_pillow', 'wardrobe', 'desk_chair', 'bathroom', 'mirror', 'tv', 'kitchen', 'wifi', 'trash_bin', 'electricity', 'window_curtains', 'power_outlets', 'shoe_rack', 'ac'];
        }

        $this->resetErrorBag('facility');
    }

    public function save()
    {
        $this->validate();

        if ($this->photo) {
            $photoBed = $this->photo->getClientOriginalName();
            $photoPath = $this->photo->storePubliclyAs('bedroom', $photoBed, 'public');
        } else {
            $photoPath = $this->bedroom?->photo ?? null;
        }

        //Jika type yang dipilih maka mempunyai description default
        if ($this->type == 'Kamar Standar') {
            $this->description = $this->description ?: 'Kamar Standar dengan fasilitas dasar yang nyaman dan terjangkau.';
        } elseif ($this->type == 'Kamar Mewah') {
            $this->description = $this->description ?: 'Kamar Mewah dengan fasilitas lengkap untuk kenyamanan maksimal.';
        } elseif ($this->type == 'Kamar Istimewa') {
            $this->description = $this->description ?: 'Kamar Istimewa dengan fasilitas premium untuk pengalaman tinggal yang mewah.';
        }

        $bedroom = Bedroom::updateOrCreate(
            ['id' => $this->bedId],
            [
                'name'        => $this->name,
                'price'       => $this->price,
                'type'        => $this->type,
                'description' => $this->description,
                'photo'       => $photoPath,
            ]
        );

        BedroomDetail::where('bedroom_id', $bedroom->id)->delete();

        // Looping array facility ketika menggunakan checkbox atau multiple select
        foreach ($this->facility as $facility) {
            BedroomDetail::updateOrCreate(
                [
                    'bedroom_id' => $bedroom->id,
                    'facility'   => $facility,
                ],
                [
                    'facility' => $facility
                ]
            );
        }

        session()->flash('success-message', 'Successfully');
        $this->redirectRoute('bedroom.data', navigate: true);
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
        return view('livewire.bedroom.form');
    }
}
