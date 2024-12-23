<div>
    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

        <!-- Profile Edit Form -->
        <form id="upload-form" wire:submit.prevent="store" method="POST" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                <div class="col-md-8 col-lg-9">
                    {{-- @if (!empty(auth()->user()->profile))
                        <img src="{{ asset('uploads/profile/' . auth()->user()->profile) }}" alt="Profile">
                    @else
                    @endif --}}
                    <img src="{{ asset('back-assets/assets/img/usernew.png') }}" alt="profile">
                    <div class="pt-2 px-4">

                        <input type="file" name="profile" id="file-input" onchange="document.getElementById('upload-form').submit();" style="display: none;">

                        <a href="#" class="btn btn-primary btn-sm" onclick="document.getElementById('file-input').click();" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <button name="deleteImage" value="true" type="submit" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                <div class="col-md-8 col-lg-9">
                    <input name="name" type="text" class="form-control" id="fullName" wire:model.live="name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="about" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                <div class="col-md-8 col-lg-9">
                    <input name="phone" type="text" class="form-control" id="phone" wire:model.live="phone">
                </div>
            </div>

            <div class="row mb-3">
                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" wire:model.live="email">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form><!-- End Profile Edit Form -->

    </div>
</div>
