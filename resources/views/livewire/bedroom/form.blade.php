<div>

    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Bedroom</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Home</a></li>
                <li class="breadcrumb-item">Bedroom</li>
                <li class="breadcrumb-item active">Form</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bedroom Form</h5>
                    <a href="{{ route('bedroom.data') }}" class="btn btn-dark btn-sm" wire:navigate>return</a>

                    <!-- General Form Elements -->
                    <form wire:submit.prevent="save" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.live="name">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model.live="price">
                            </div>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputCheckbox" class="col-sm-2 col-form-label">Facility</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="bed_pillow" wire:model.live="bed_pillow">
                                        <label class="form-check-label">
                                            Bed and Pillow
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="wardrobe" wire:model.live="wardrobe">
                                        <label class="form-check-label">
                                            Wardrobe
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="desk_chair" wire:model.live="desk_chair">
                                        <label class="form-check-label">
                                            Desk and Chair
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="bathroom" wire:model.live="bathroom">
                                        <label class="form-check-label">
                                            Private Bathroom
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirror" wire:model.live="mirror">
                                        <label class="form-check-label">
                                            Mirror
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="tv" wire:model.live="tv">
                                        <label class="form-check-label">
                                            TV (Television)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="kitchen" wire:model.live="kitchen">
                                        <label class="form-check-label">
                                            Private Kitchen
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="wifi" wire:model.live="wifi">
                                        <label class="form-check-label">
                                            WiFi/Internet Access
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="trash_bin" wire:model.live="trash_bin">
                                        <label class="form-check-label">
                                            Trash Bin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="electricity" wire:model.live="electricity">
                                        <label class="form-check-label">
                                            Electricity
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="window_curtains" wire:model.live="window_curtains">
                                        <label class="form-check-label">
                                            Window and Curtains
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="power_outlets" wire:model.live="power_outlets">
                                        <label class="form-check-label">
                                            Power Outlets
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="shoe_rack" wire:model.live="shoe_rack">
                                        <label class="form-check-label">
                                            Shoe Rack
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ac" wire:model.live="ac">
                                        <label class="form-check-label">
                                            Air Conditioner (AC) or Fan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @error('facility')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('photo') is-invalid @enderror" type="file" id="formFile" wire:model.live="photo">
                            </div>
                            <div wire:loading wire:target="photo" class="mt-1">
                                <p class="badge bg-primary rounded-pill">Uploading...</p>
                            </div>
                            <div>
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            @if (empty(!$bedroom))
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label class="col-sm-2 col-form-label">Old Photo</label>
                                        <img src="{{ Storage::url($bedroom->photo) }}" alt="" class="img-fluid rounded w-50">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @if (is_object($photo))
                                        <div class="form-group mb-2">
                                            <img src="{{ $photo->temporaryUrl() }}" class="img-fluid rounded w-50">
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="col-md-6">
                                    @if (is_object($photo))
                                        <div class="form-group mb-2">
                                            <img src="{{ $photo->temporaryUrl() }}" class="img-fluid rounded w-50">
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>

</div>
