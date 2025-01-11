<div>
    <section class="vh-150 mt-3 mb-2" style="background-color: #eee">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-4">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Biodata</p>

                                    <form wire:submit.prevent="store" class="mx-1 mx-md-4" enctype="multipart/form-data">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-phone fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="number" value="{{ old('phone') }}" id="form3Example1c" class="form-control @error('phone') is-invalid @enderror" wire:model="phone" />
                                                <label class="form-label" for="form3Example1c">Telepon</label>
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-location-dot fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" value="{{ old('address') }}" id="form3Example3c" class="form-control @error('address') is-invalid @enderror"
                                                    wire:model="address" />
                                                <label class="form-label" for="form3Example3c">Alamat</label>
                                                @error('address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-city fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example4c" class="form-control @error('city') is-invalid @enderror" wire:model="city" />
                                                <label class="form-label" for="form3Example4c">Kota</label>
                                                @error('city')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-map-location-dot fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example4cd" class="form-control @error('state') is-invalid @enderror" wire:model="state" />
                                                <label class="form-label" for="form3Example4cd">Provinsi</label>
                                                @error('state')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-camera fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="file" id="form3Example4cd" class="form-control @error('ktp') is-invalid @enderror" wire:model="ktp" />
                                                <label class="form-label" for="form3Example4cd">Foto Ktp</label>
                                                @error('ktp')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        @if (is_object($ktp))
                                            <div class="col-md-6 mb-2 mx-5">
                                                <div class="form-group">
                                                    <img src="{{ $ktp->temporaryUrl() }}" class="img-fluid rounded w-100 shadow-sm">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-check d-flex justify-content-center mb-4 mt-4">
                                            <label class="form-check-label">
                                                apakah anda sudah mempunyai akun? <a href="{{ route('login') }}" wire:navigate>Log in</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Simpan</button>
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
