<div>
    <section class="vh-150 mt-5" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-9 col-xl-9">
                    <div class="card text-black" style="border-radius: 25px;"">
                        <div class="card-body p-md-4">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

                                    <form wire:submit.prevent="login" class="mx-1 mx-md-4">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input name="name" type="text" id="form3Example3c" value="{{ old('name') }}" class="form-control" wire:model='name'/>
                                                <label class="form-label" for="form3Example3c">Username</label>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input name="password" type="password" id="form3Example4c" class="form-control" wire:model='password'/>
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <label class="form-check-label">
                                                Don't have an account? <a href="{{ route('register') }}" wire:navigate>Sign up</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Login</button>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 position-relative">

                                    <p class="text-center h3 fw-semibold mx-1 mx-md-2 mt-1 mb-1 position-absolute" style="top: 0; width: 100%;">Kost-18</p>

                                    <img src="{{ asset('uploads/img/bedtrans.png') }}" class="img-fluid w-100 mt-4 mb-5" alt="Sample image">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
