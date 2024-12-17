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
    public $name, $price, $photo, $bedId, $bedroom, $facility = [];

    // Validation
    protected $rules = [
        'name'     => 'required',
        'price'    => 'required|numeric',
        'photo'    => 'required|image|mimes:jpeg,png,jpg,webp|max:1024',
        'facility' => 'required|array',
    ];

    public function mount($bedId = NULL)
    {
        if ($bedId) {
            $this->bedId = $bedId;
            $bedroom     = Bedroom::with('bedroomDetail')->find($bedId);
            if ($bedroom) {
                $this->bedId    = $bedroom->id;
                $this->name     = $bedroom->name;
                $this->price    = $bedroom->price;
                $this->photo    = $bedroom->photo;
                $this->facility = $bedroom->bedroomDetail->pluck('facility')->toArray();
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
            $photoBed = $this->photo->getClientOriginalName();
            $photoPath = $this->photo->storePubliclyAs('bedroom', $photoBed, 'public');
        } else {
            $photoPath = $this->photo;
        }

        $bedroom = Bedroom::updateOrCreate(
            ['id' => $this->bedId],
            [
                'name'  => $this->name,
                'price' => $this->price,
                'photo' => $photoPath,
            ]
        );


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

    public function render()
    {
        return view('livewire.bedroom.form');
    }
}
