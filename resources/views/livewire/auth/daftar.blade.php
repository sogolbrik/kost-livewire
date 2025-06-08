<div>
    <!-- Menampilkan Pesan Flash Error -->
    @if (session()->has('error-message'))
        <div class="alert alert-danger alert-dismissible fade show mb-4 mt-3" role="alert">
            {{ session('error-message') }}
        </div>
    @endif
    <div>
        <form wire:submit.prevent="register">
            <img src="{{ asset('back-assets/assets/img/avatar.svg') }}">
            <h2 class="title">Daftar Disini</h2>

            <div class="input-div pass {{ $isFocusedUser ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-person" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    {{-- <h5>Username</h5> --}}
                    <input type="text" class="input {{ $this->isValid('name') }}" wire:model.live="name" wire:focus='setFocusUser(true)' wire:blur='setFocusUser(false)'>
                </div>
            </div>
            @error('name')
                <small class="text-secondary">{{ $message }}</small>
            @enderror

            <div class="input-div pass {{ $isFocusedEmail ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-envelope" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    {{-- <h5>Email</h5> --}}
                    <input type="text" class="input {{ $this->isValid('email') }}" wire:model.live="email" wire:focus='setFocusEmail(true)' wire:blur='setFocusEmail(false)'>
                </div>
            </div>
            @error('email')
                <small class="text-secondary">{{ $message }}</small>
            @enderror

            <div class="input-div pass {{ $isFocusedPass ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-lock" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    {{-- <h5>Password</h5> --}}
                    <input type="password" class="input {{ $this->isValid('password') }}" wire:model.live="password" wire:focus='setFocusPass(true)' wire:blur='setFocusPass(false)'>
                </div>
            </div>
            @error('password_confirmation')
                <small class="text-secondary">{{ $message }}</small>
            @enderror

            <div class="input-div pass {{ $isFocusedRePass ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-key" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    {{-- <h5>Ulang Password</h5> --}}
                    <input type="password" class="input {{ $this->isValid('password_confirmation') }}" wire:model.live="password_confirmation" wire:focus='setFocusRePass(true)'
                        wire:blur='setFocusRePass(false)'>
                </div>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>

        <div class="d-flex justify-content-center">
            <div class="fs-6 mx-1">sudah punya akun? </div>
            <div>
                <a href="{{ route('login') }}" class="text-decoration-none" wire:navigate>login</a>
            </div>
        </div>

    </div>

    @script
        <script>
            $(document).ready(function() {
                const inputs = $(".input");

                inputs.each(function() {
                    $(this).on("focus", function() {
                        $(this).parent().parent().addClass("focus");
                    });

                    $(this).on("blur", function() {
                        let parent = $(this).parent().parent();
                        if ($(this).val() === "") {
                            parent.removeClass("focus");
                        }
                    });
                });
            });
        </script>
    @endscript

</div>
