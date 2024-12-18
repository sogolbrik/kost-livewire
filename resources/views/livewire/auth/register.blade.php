<div>
    <section class="vh-150 mt-3 mb-2" style="background-color: #eee">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-4">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form wire:submit.prevent="register" class="mx-1 mx-md-4">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input name="name" type="text" value="{{ old('name') }}" id="form3Example1c" class="form-control @error('name') is-invalid @enderror" wire:model="name" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input name="email" type="email" value="{{ old('email') }}" id="form3Example3c" class="form-control @error('email') is-invalid @enderror" wire:model="email" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input name="password" type="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" wire:model="password" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                @error('password_confirmation')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input name="password_confirmation" type="password" id="form3Example4cd" class="form-control @error('password_confirmation') is-invalid @enderror" wire:model="password_confirmation" />
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <label class="form-check-label">
                                                already have an account? <a href="{{ route('login') }}" wire:navigate>Sign in</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 position-relative">

                                    <p class="text-center h1 fw-semibold mx-1 mx-md-4 mt-4 position-absolute" style="top: 0; width: 100%;">Kost-18</p>

                                    <img src="{{ asset('uploads/img/bedtrans.png') }}" class="img-fluid w-100 mt-4" alt="Sample image">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
