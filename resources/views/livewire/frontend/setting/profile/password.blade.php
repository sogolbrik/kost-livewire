<div>
    <form wire:submit.prevent="update">

        <div class="row mb-3">
            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
            <div class="col-md-8 col-lg-9">
                <input type="password" class="form-control {{ $this->isValid('password') }}" id="newPassword" wire:model.live="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Masukkan ulang password</label>
            <div class="col-md-8 col-lg-9">
                <input type="password" class="form-control {{ $this->isValid('password_confirmation') }}" id="password_confirmation" wire:model.live="password_confirmation">
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Ubah Password</button>
        </div>
    </form><!-- End Change Password Form -->
</div>
