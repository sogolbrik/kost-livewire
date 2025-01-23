<div>
    <div>
        <form wire:submit.prevent="register">
            <img src="{{ asset('back-assets/assets/img/avatar.svg') }}">
            <h2 class="title">Welcome</h2>
            <div class="input-div one {{ $isFocusedUser ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-person" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    {{-- <h5>Username</h5> --}}
                    <input type="text" class="input {{ $this->isValid('name') }}" wire:model.live="name" wire:focus='setFocusUser(true)' wire:blur='setFocusUser(false)'>
                </div>
            </div>

            <div class="input-div one {{ $isFocusedEmail ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-envelope" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    {{-- <h5>Email</h5> --}}
                    <input type="text" class="input {{ $this->isValid('email') }}" wire:model.live="email" wire:focus='setFocusEmail(true)' wire:blur='setFocusEmail(false)'>
                </div>
            </div>

            <div class="input-div pass {{ $isFocusedPass ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-lock" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    {{-- <h5>Password</h5> --}}
                    <input type="password" class="input {{ $this->isValid('password') }}" wire:model.live="password" wire:focus='setFocusPass(true)' wire:blur='setFocusPass(false)'>
                </div>
            </div>

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
        <small>sudah punya akun? <a href="{{ route('login') }}" wire:navigate>login</a></small>
    </div>

    @error('name')
        @script
            <script>
                Swal.fire({
                    position: "top",
                    title: "Ada yang salah nih!",
                    icon: "error",
                    showConfirmButton: false,
                    toast: true,
                    timer: 2500,
                });
            </script>
        @endscript
    @enderror

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
