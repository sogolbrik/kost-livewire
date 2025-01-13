<div>


    <section class="light-background mt-2">
        <div class="container section-title mt-4" data-aos="fade-in">
            <h2>Booking</h2>
            <div><span>Detail</span> <span class="description-title">Kamar</span></div>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="margin-left: -40px;">
                    <img class="img-fluid rounded shadow" src="{{ Storage::url($bedId->photo) }}" alt="{{ $bedId->name }}">
                </div>
                <div class="col-md-4" style="margin-left: 40px;">
                    <div class="mb-3">
                        <img class="img-fluid rounded shadow-sm" src="{{ Storage::url($bedId->photo) }}" alt="{{ $bedId->name }}">
                    </div>
                    <div>
                        <img class="img-fluid rounded shadow-sm" src="{{ Storage::url($bedId->photo) }}" alt="{{ $bedId->name }}">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="mt-4" data-aos="fade-in">
                        <h1 class="fw-semibold">{{ $bedId->name }} Type {{ $bedId->type }}</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-3" style="margin-right: -20px">
                            <div class="p-2 border border-secondary-subtle rounded text-center">
                                <span class="fw-bold">Kos Putra/Putri</span>
                            </div>
                        </div>
                        <div class="col-md-1 d-flex justify-content-center align-items-center">
                            <i class="bi bi-dot"></i>
                        </div>
                        <div class="col-md-3" style="margin-left: -70px;">
                            <div class="p-2 text-center">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span class="fw-bold">Kutorejo</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p><i class="bi bi-door-open"></i> Banyak pilihan kamar untukmu</p>
                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="fw-bold mb-2">Kos dikelola oleh Pemilik</h5>
                                <p class="text-secondary">Sogol</p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end" style="margin-left: -60px">
                                <img src="{{ asset('front-assets/assets/img/team/user.png') }}" alt="user" class="img-fluid rounded-circle" style="width: 60px; height: 60px">
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="mt-3">
                        <h4 class="fw-bold">Spesifikasi tipe kamar</h4>
                        <i class="bi bi-building"> {{ $bedId->width }}</i>
                        <br>
                        @foreach ($bedId->bedroomDetail as $item)
                            @if ($item->facility == 'Listrik')
                                <i class="bi bi-lightning"> {{ ucfirst(str_replace('_', ' ', $item->facility)) }}</i>
                            @endif
                        @endforeach
                        <hr>
                        <h4 class="fw-bold">Fasilitas Kamar</h4>
                        @foreach ($bedId->bedroomDetail as $item)
                            <div class="row">
                                <div class="col-md-6">
                                    @if ($item->facility == 'Kasur & Bantal')
                                        <i class="ri-hotel-bed-fill"> {{ ucfirst(str_replace('_', ' ', $item->facility)) }}</i>
                                    @endif
                                    @if ($item->facility == 'Kipas Angin' || $item->facility == 'AC')
                                        <i class="bi bi-lightning"> {{ ucfirst(str_replace('_', ' ', $item->facility)) }}</i>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @if ($item->facility == 'Lemari')
                                        <i class="bi bi-lightning"> {{ ucfirst(str_replace('_', ' ', $item->facility)) }}</i>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <hr>
                        <h4 class="fw-bold">Fasilitas Kamar Mandi</h4>
                        @foreach ($bedId->bedroomDetail as $item)
                            <div class="row">
                                <div class="col-md-6">
                                    @if ($item->facility == 'K. Mandi Dalam')
                                        <i class="bi bi-lightning"> {{ ucfirst(str_replace('_', ' ', $item->facility)) }}</i>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <hr>
                        <h4 class="fw-bold">Peraturan khusus kamar ini</h4>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-dot"></i>
                            <div class="fw-normal text-black">Tamu boleh menginap</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-dot"></i>
                            <div class="fw-normal text-black">Tamu menginap dikenakan biaya</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-dot"></i>
                            <div class="fw-normal text-black">Tipe ini bisa diisi maks. 2 orang/ kamar</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-dot"></i>
                            <div class="fw-normal text-black">Boleh pasutri</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="text-secondary fw-normal ms-3">Wajib sertakan surat nikah saat pengajuan sewa</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-dot"></i>
                            <div class="fw-normal text-black">Tidak boleh bawa anak</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card shadow-sm" id="sticky">
                        <div class="card-body">

                            <form wire:submit.prevent="sessionTransaction">
                                <div class="mb-3">
                                    <h3 class="fw-bold text-decoration-underline">Rp {{ number_format($bedId->price, 0, ',', '.') }}</h3>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Tanggal Masuk</label>
                                        <input id="inputTanggal" type="date" class="form-control" wire:model="entering_room">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Durasi</label>
                                        <select class="form-select" id="selectDurasi" wire:model='duration'>
                                            <option value="" selected disabled>Pilih</option>
                                            <option value="1">Per Bulan</option>
                                            <option value="3">Per 3 Bulan</option>
                                            <option value="6">Per 6 Bulan</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- Detail Harga Kamar --}}
                                <div class="row mb-3" id="detailHargaKamar" style="display: none">
                                    <div class="col-md-12">
                                        <div class="p-2 border border-secondary-subtle rounded text-center">
                                            <span class="fw-bold">Detail Harga Kamar</span>
                                            <div>Harga per bulan: Rp {{ number_format($bedId->price, 0, ',', '.') }}</div>
                                            <hr>
                                            <div>Durasi: <span id="durasiText"></span></div>
                                            <div>Total Harga: Rp <span id="totalHarga"></span></div>
                                        </div>
                                    </div>
                                </div>

                                @script
                                    <script>
                                        $(document).ready(function() {
                                            //Tanggal & Durasi
                                            const $inputTanggal = $('#inputTanggal');
                                            const $selectDurasi = $('#selectDurasi');
                                            const $detailHargaKamar = $('#detailHargaKamar');
                                            const $durasiText = $('#durasiText');
                                            const $totalHarga = $('#totalHarga');
                                            const $dpHarga = $('#dpHarga');

                                            function updateDetailHarga() {
                                                const tanggal = $inputTanggal.val();
                                                const durasi = $selectDurasi.val();

                                                if (tanggal && durasi) {
                                                    $detailHargaKamar.show();
                                                    let durasiText = '';
                                                    switch (durasi) {
                                                        case '1':
                                                            durasiText = 'Per Bulan';
                                                            break;
                                                        case '3':
                                                            durasiText = 'Per 3 Bulan';
                                                            break;
                                                        case '6':
                                                            durasiText = 'Per 6 Bulan';
                                                            break;
                                                    }
                                                    const totalHarga = durasi * {{ $bedId->price }};
                                                    const dpHarga = totalHarga * 0.3;
                                                    $durasiText.text(durasiText);
                                                    $totalHarga.text(new Intl.NumberFormat('id-ID').format(totalHarga));
                                                    $dpHarga.text(new Intl.NumberFormat('id-ID').format(dpHarga));
                                                } else {
                                                    $detailHargaKamar.hide();
                                                }
                                            }

                                            $inputTanggal.on('change', updateDetailHarga);
                                            $selectDurasi.on('change', updateDetailHarga);

                                        });
                                    </script>
                                @endscript

                                <div class="d-grid">
                                    @if (Auth::check())
                                        <button type="submit" class="btn btn-primary">
                                            <div class="fw-semibold">Ajukan Sewa</div>
                                        </button>
                                    @else
                                        <a href="{{ route('login') }}" wire:navigate class="btn btn-primary">
                                            <div class="fw-semibold">Ajukan Sewa</div>
                                        </a>
                                    @endif
                                </div>
                            </form>

                            {{-- Detail Harga Kamar Hide Show --}}
                        </div>
                    </div>
                </div>
            </div>
    </section>

</div>
