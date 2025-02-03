<div>

    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Kamar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item">Kamar</li>
                <li class="breadcrumb-item active">Form</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Kamar</h5>
                    <a href="{{ route('bedroom.data') }}" class="btn btn-dark btn-sm" wire:navigate>kembali</a>

                    <!-- General Form Elements -->
                    <form wire:submit.prevent="save" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control {{ $this->isValid('name') }}" wire:model.live="name">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control {{ $this->isValid('price') }}" wire:model.live="price">
                            </div>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputType" class="col-sm-2 col-form-label">Tipe</label>
                            <div class="col-sm-10">
                                <select class="form-select @error('type') border-danger @enderror" wire:model.live="type" wire:change="updateFacilities"> {{-- Mengganti/mengisi checkbox sesuai type --}}
                                    <option selected disabled value="">Pilih Tipe</option>
                                    <option value="Kamar Standar">Standar</option>
                                    <option value="Kamar Mewah">Mewah</option>
                                    <option value="Kamar Istimewa">Istimewa</option>
                                </select>
                            </div>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputDescription" class="col-form-label">Deskripsi</label>
                            <small class="text-secondary mx-3">*tidak wajib diisi</small>
                            <div class="col-sm-10">
                                <textarea class="form-control {{ $this->isValid('description') }}" rows="3" wire:model.live="description"></textarea>
                            </div>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputWidth" class="col-form-label">Lebar Kamar</label>
                            <small class="text-secondary mx-3">*standar 3 x 2.5 m</small>
                            <div class="col-sm-10">
                                <input type="text" class="form-control {{ $this->isValid('width') }}" wire:model.live="width">
                            </div>
                            @error('width')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputCheckbox" class="col-sm-2 col-form-label">Fasilitas</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Kasur & Bantal" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Kasur dan Bantal
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Lemari" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Lemari
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Meja dan Kursi" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Meja dan Kursi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="K. Mandi Dalam" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Kamar Mandi Dalam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Kaca" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Kaca
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="TV" wire:model.live="facility">
                                        <label class="form-check-label">
                                            TV (Televisi)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Dapur Pribadi" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Dapur Pribadi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="WI-FI" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Akses WiFi/Internet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Tempat Sampah" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Tempat Sampah
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Listrik" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Listrik
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Jendela dan Tirai" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Jendela dan Tirai
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Stopkontak" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Stopkontak
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Rak Sepatu" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Rak Sepatu
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="AC" wire:model.live="facility">
                                        <label class="form-check-label">
                                            AC (Air Conditioner)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Kipas Angin" wire:model.live="facility">
                                        <label class="form-check-label">
                                            Kipas Angin
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @error('facility')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputWidth" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control {{ $this->isValid('photo') }}" type="file" id="formFile" wire:model.live="photo">
                            </div>
                            <div wire:loading wire:target="photo" class="mt-1">
                                <p class="badge bg-secondary rounded-pill">Proses...</p>
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
                                        <label class="col-sm-2 col-form-label d-flex">Foto Lama</label>
                                        <img src="{{ Storage::url($bedroom->photo) }}" alt="" class="img-fluid rounded w-50">
                                    </div>
                                </div>
                                @if (is_object($photo))
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="col-sm-2 col-form-label d-flex">Foto</label>
                                            <img src="{{ $photo->temporaryUrl() }}" class="img-fluid rounded w-50">
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="col-md-6">
                                    @if (is_object($photo))
                                        <div class="form-group mb-2">
                                            <label class="col-sm-2 col-form-label d-flex">Foto</label>
                                            <img src="{{ $photo->temporaryUrl() }}" class="img-fluid rounded w-50">
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>

</div>
