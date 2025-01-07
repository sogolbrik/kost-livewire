<div>
    <section class="light-background mt-2">
        <div class="container mt-4">
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
                        <hr>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form wire:submit="">
                                <div class="mb-3">
                                    <h3 class="fw-bold text-decoration-underline">Rp {{ number_format($bedId->price, 0, ',', '.') }}</h3>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Pilih Tanggal</label>
                                        <input id="inputTanggal" type="date" class="form-control" placeholder="Pilih Tanggal">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Durasi</label>
                                        <select class="form-select" id="selectDurasi">
                                            <option value="" selected disabled>Pilih Durasi</option>
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
                                            <span class="fw-bold text-start">Detail Harga Kamar</span>
                                            <div class="text-start">Harga per bulan: Rp {{ number_format($bedId->price, 0, ',', '.') }}</div>
                                            <hr>
                                            <div class="text-start">Durasi: <span id="durasiText"></span></div>
                                            <div class="text-start">Total Harga: Rp <span id="totalHarga"></span></div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Detail Harga Kamar Hide Show --}}
                                @script
                                    <script>
                                        $(document).ready(function() {
                                            const $inputTanggal = $('#inputTanggal');
                                            const $selectDurasi = $('#selectDurasi');
                                            const $detailHargaKamar = $('#detailHargaKamar');
                                            const $durasiText = $('#durasiText');
                                            const $totalHarga = $('#totalHarga');

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
                                                    $durasiText.text(durasiText);
                                                    $totalHarga.text(new Intl.NumberFormat('id-ID').format(durasi * {{ $bedId->price }}));
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
                                    <button class="btn btn-primary">
                                        <div class="fw-semibold">Ajukan Sewa</div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#09015e" fill-opacity="1"
            d="M0,96L80,117.3C160,139,320,181,480,165.3C640,149,800,75,960,58.7C1120,43,1280,85,1360,106.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg> --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin-left: -40px">

                </div>
                <div class="col-md-8" style="margin-left: 40px">

                </div>
            </div>
        </div>
    </section>
</div>
