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
    public $name, $price, $photo, $type = "", $description, $bedId, $bedroom, $facility = [], $width;

    // Validation
    protected $rules = [
        'name'        => 'required',
        'price'       => 'required|numeric',
        'photo'       => 'required|image|mimes:jpeg,png,jpg,webp|max:1024',
        'type'        => 'required',
        'width'       => 'sometimes',
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
                $this->width       = $bedroom->width;
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
            $this->facility = ['Kasur & Bantal', 'Lemari', 'Meja dan Kursi', 'K. Mandi Dalam', 'Kaca', 'Tempat Sampah', 'Listrik', 'Stopkontak', 'Jendela dan Tirai', 'Kipas Angin'];
        } elseif ($this->type == 'Kamar Mewah') {
            $this->facility = ['Kasur & Bantal', 'Lemari', 'Meja dan Kursi', 'K. Mandi Dalam', 'Kaca', 'TV', 'WI-FI', 'Tempat Sampah', 'Listrik', 'Jendela dan Tirai', 'Stopkontak', 'Rak Sepatu', 'AC'];
        } elseif ($this->type == 'Kamar Istimewa') {
            $this->facility = ['Kasur & Bantal', 'Lemari', 'Meja dan Kursi', 'K. Mandi Dalam', 'Kaca', 'TV', 'Dapur Pribadi', 'WI-FI', 'Tempat Sampah', 'Listrik', 'Jendela dan Tirai', 'Stopkontak', 'Rak Sepatu', 'AC'];
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

        if (empty($this->width)) {
            $this->width = '3 x 2.5 meter';
        }

        $bedroom = Bedroom::updateOrCreate(
            ['id' => $this->bedId],
            [
                'name'        => $this->name,
                'price'       => $this->price,
                'type'        => $this->type,
                'width'       => $this->width,
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
