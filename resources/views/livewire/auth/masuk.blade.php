<div>
    <div>
        <form wire:submit.prevent="login">
            <img src="{{ asset('back-assets/assets/img/avatar.svg') }}">
            <h2 class="title">Welcome</h2>
            <div class="input-div one {{ $isFocused ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-person" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" class="input {{ $this->isValid('name') }}" wire:model.live="name" wire:focus='setFocus(true)' wire:blur='setFocus(false)'>
                </div>
            </div>
            <div class="input-div pass {{ $isFocusedPass ? 'focus' : '' }}">
                <div class="i">
                    <i class="bi bi-lock" style="font-size: 23px"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input {{ $this->isValid('password') }}" wire:model.live="password" wire:focus='setFocusPass(true)' wire:blur='setFocusPass(false)'>
                </div>
            </div>
            <p>belum punya akun? <a href="{{ route('register') }}" wire:navigate>register</a></p>
            <button type="submit" class="btn">Login</button>
        </form>
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
