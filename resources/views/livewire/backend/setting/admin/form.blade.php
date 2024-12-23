<div>
    <!-- Profile Edit Form -->
    <form id="upload-form" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
            <div class="col-md-8 col-lg-9">
                @if (is_object($photo))
                    <img src="{{ $photo->temporaryUrl() }}" class="img-fluid rounded">
                @elseif(!empty($photo))
                    <img src="{{ Storage::url($photo) }}" class="img-fluid rounded">
                @else
                    <img src="{{ asset('back-assets/assets/img/usernew.png') }}" alt="profile" class="img-fluid rounded">
                @endif

                <div class="pt-2 px-4">
                    <input type="file" id="file-input" style="display: none;" wire:model="photo">
                    {{-- onchange="document.getElementById('upload-form').submit();" --}}

                    <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('file-input').click();" title="Upload new profile image"><i
                            class="bi bi-upload"></i></button>
                    <button wire:click="deletePhoto" value="true" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></button>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="fullName" wire:model.live="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-9">
                <input type="email" class="form-control" id="Email" wire:model.live="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="about" class="col-md-4 col-lg-3 col-form-label">Phone</label>
            <div class="col-md-8 col-lg-9">
                <input type="number" class="form-control" id="phone" wire:model.live="phone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form><!-- End Profile Edit Form -->
</div>
