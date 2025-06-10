<div>

    <style>
        :root {
            --primary-blue: #2563eb;
            --light-blue: #dbeafe;
            --dark-blue: #1e40af;
        }

        body {
            background-color: #f8fafc;
            color: #334155;
        }

        .hero-image {
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
        }

        .badge-custom {
            background-color: var(--light-blue);
            color: var(--primary-blue);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
        }

        .feature-card {
            background: white;
            border: 2px solid var(--light-blue);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-size: 1.5rem;
        }

        .booking-card {
            position: sticky;
            top: 20px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.1);
            border: 2px solid var(--light-blue);
        }

        .btn-primary-custom {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            color: white;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
        }

        .btn-primary-custom:hover {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
        }

        .facility-item {
            display: flex;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .facility-item:last-child {
            border-bottom: none;
        }

        .facility-icon {
            width: 24px;
            color: var(--primary-blue);
            margin-right: 12px;
        }

        .rule-item {
            padding: 8px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .rule-item:last-child {
            border-bottom: none;
        }

        .price-highlight {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary-blue);
        }

        .price-detail {
            background: var(--light-blue);
            border-radius: 8px;
            padding: 16px;
            margin-top: 16px;
        }
    </style>

    <div class="container-fluid px-4 py-4" style="margin-top: 80px">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Hero Image -->
                <div class="mb-4">
                    @if ($bedId->photo == null)
                        @if ($bedId->type == 'Kamar Standar')
                            <img src="{{ asset('seed/bedroom/standar.jpg') }}" alt="Kamar Kos" class="img-fluid hero-image w-100">
                        @elseif($bedId->type == 'Kamar Mewah')
                            <img src="{{ asset('seed/bedroom/mewah.jpg') }}" alt="Kamar Kos" class="img-fluid hero-image w-100">
                        @elseif($bedId->type == 'Kamar Istimewa')
                            <img src="{{ asset('seed/bedroom/istimewa.jpg') }}" alt="Kamar Kos" class="img-fluid hero-image w-100">
                        @endif
                    @else
                        <img src="{{ Storage::url($bedId->photo) }}" alt="Kamar Kos" class="img-fluid hero-image w-100">
                    @endif
                </div>

                <!-- Title & Basic Info -->
                <div class="mb-4">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="badge-custom">Kos Putra/Putri</span>
                        <span class="badge-custom">Dikelola GlgDev</span>
                    </div>
                    <h1 class="h2 fw-bold text-dark mb-2">{{ $bedId->name }} -
                        @if ($bedId->type == 'Kamar Standar')
                            Standar
                        @elseif($bedId->type == 'Kamar Mewah')
                            Mewah
                        @else
                            Istimewa
                        @endif
                    </h1>
                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt me-2"></i>Kos Putra/Putri</p>
                </div>

                <!-- Keunggulan -->
                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-4 text-dark">Yang Kamu Dapatkan Disini</h3>

                    <div class="feature-card">
                        <div class="d-flex align-items-start">
                            <div class="feature-icon me-3">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Asuransi Khusus Penyewa</h5>
                                <p class="text-muted mb-0">Perlindungan selama ngekos atas kompensasi kehilangan barang dan kerusakan fasilitas pada unit kamar. Disediakan oleh kami sendiri.
                                    Syarat & Ketentuan berlaku.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-card">
                        <div class="d-flex align-items-start">
                            <div class="feature-icon me-3">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Pro Service</h5>
                                <p class="text-muted mb-0">Ditangani secara profesional oleh tim DelapanBelasKos. Selama kamu ngekos di sini, ada tim dari kami yang akan merespon saran dan
                                    komplainmu.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-card">
                        <div class="d-flex align-items-start">
                            <div class="feature-icon me-3">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Dikelola Pendiri, Terjamin Nyaman</h5>
                                <p class="text-muted mb-0">Kos ini operasionalnya dikelola dan distandardisasi oleh Pendiri.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Spesifikasi Kamar -->
                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-4 text-dark">Spesifikasi Tipe Kamar</h3>
                    <div class="bg-white rounded-3 p-4 border" style="border-color: var(--light-blue) !important;">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="fw-bold text-dark mb-3">Ukuran Kamar</h6>
                                <p class="mb-3"><i class="fas fa-ruler-combined text-primary me-2"></i>{{ $bedId->width }}</p>

                                <h6 class="fw-bold text-dark mb-3">Fasilitas Utama</h6>
                                @if ($bedId->type == 'Kamar Standar')
                                    <div class="facility-item">
                                        <i class="fas fa-bed facility-icon"></i>
                                        <span>Kasur & Bantal</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-wifi facility-icon"></i>
                                        <span>Wifi</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-plug facility-icon"></i>
                                        <span>Stopkontak</span>
                                    </div>
                                @elseif($bedId->type == 'Kamar Mewah')
                                    <div class="facility-item">
                                        <i class="fas fa-chair facility-icon"></i>
                                        <span>Kursi & Meja</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-tv facility-icon"></i>
                                        <span>TV</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-snowflake facility-icon"></i>
                                        <span>AC</span>
                                    </div>
                                @else
                                    <div class="facility-item">
                                        <i class="fas fa-utensils facility-icon"></i>
                                        <span>Dapur Pribadi</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-shower facility-icon"></i>
                                        <span>K. Mandi Dalam</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-shoe-prints facility-icon"></i>
                                        <span>Rak Sepatu</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peraturan Khusus -->
                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-4 text-dark">Peraturan Khusus Kamar Ini</h3>
                    <div class="bg-white rounded-3 p-4 border" style="border-color: var(--light-blue) !important;">
                        <div class="rule-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Tamu boleh menginap</span>
                        </div>
                        <div class="rule-item">
                            <i class="fas fa-users text-primary me-2"></i>
                            <span>Tipe ini bisa diisi maks. 2 orang/kamar</span>
                        </div>
                        <div class="rule-item">
                            <i class="fas fa-heart text-danger me-2"></i>
                            <span>Boleh pasutri</span>
                        </div>
                        <div class="rule-item">
                            <i class="fas fa-file-alt text-info me-2"></i>
                            <span>Wajib sertakan surat nikah saat pengajuan sewa</span>
                        </div>
                        <div class="rule-item">
                            <i class="fas fa-times-circle text-danger me-2"></i>
                            <span>Tidak boleh bawa anak</span>
                        </div>
                    </div>
                </div>

                <!-- Seluruh Fasilitas -->
                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-4 text-dark">Seluruh Fasilitas Dalam Kamar</h3>
                    <div class="bg-white rounded-3 p-4 border" style="border-color: var(--light-blue) !important;">
                        @php
                            $iconMap = [
                                'Kasur & Bantal' => 'fa-bed',
                                'Lemari' => 'fa-warehouse',
                                'Meja dan Kursi' => 'fa-chair',
                                'K. Mandi Dalam' => 'fa-shower',
                                'Kaca' => 'fa-square',
                                'TV' => 'fa-tv',
                                'Dapur Pribadi' => 'fa-utensils',
                                'WI-FI' => 'fa-wifi',
                                'Tempat Sampah' => 'fa-trash-alt',
                                'Listrik' => 'fa-bolt',
                                'Jendela dan Tirai' => 'fa-window-maximize',
                                'Stopkontak' => 'fa-plug',
                                'Rak Sepatu' => 'fa-shoe-prints',
                                'AC' => 'fa-snowflake',
                                'Kipas Angin' => 'fa-fan',
                            ];
                        @endphp

                        <div class="row">
                            @foreach ($bedId->bedroomDetail->chunk(2) as $pair)
                                @foreach ($pair as $item)
                                    <div class="col-md-6 mb-2">
                                        <div class="facility-item d-flex align-items-center">
                                            @php
                                                $icon = $iconMap[$item->facility] ?? null;
                                            @endphp
                                            @if ($icon)
                                                <i class="fas {{ $icon }} facility-icon me-2"></i>
                                            @else
                                                <span class="me-4 d-inline-block" style="width: 1.25rem;"></span> {{-- spacer if no icon --}}
                                            @endif
                                            <span>{{ $item->facility }}</span>
                                        </div>
                                    </div>
                                @endforeach
                                @if ($pair->count() == 1)
                                    <div class="col-md-6 mb-2"><!-- Empty to fill row --></div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <!-- Booking Card -->
            <div class="col-lg-4">
                <div class="booking-card p-4">
                    <div class="text-center mb-4">
                        <div class="price-highlight">Rp {{ number_format($bedId->price, 0, ',', '.') }}</div>
                        <small class="text-muted">per bulan</small>
                    </div>

                    <form id="bookingForm" wire:submit.prevent="sessionTransaction">
                        <div class="mb-3">
                            <label for="tanggalMasuk" class="form-label fw-bold">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="tanggalMasuk" required wire:model='entering_room'>
                        </div>

                        <div class="mb-4">
                            <label for="durasi" class="form-label fw-bold">Pilih Durasi</label>
                            <select class="form-select" id="durasi" required wire:model='duration'>
                                <option value="">Pilih durasi sewa</option>
                                <option value="1">1 Bulan</option>
                                <option value="3">3 Bulan</option>
                                <option value="6">6 Bulan</option>
                            </select>
                        </div>

                        <div id="priceDetail" class="price-detail" style="display: none;">
                            <h6 class="fw-bold mb-3">Detail Harga</h6>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Harga per bulan:</span>
                                <span class="fw-bold">Rp {{ number_format($bedId->price, 0, ',', '.') }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span id="durasiText">Durasi:</span>
                                <span id="durasiValue" class="fw-bold"></span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <span class="fw-bold">Total Harga:</span>
                                <span id="totalHarga" class="fw-bold text-primary"></span>
                            </div>
                        </div>

                        @endif
                        @if (Auth::check())
                            @if (empty(auth()->user()->phone))
                                <a href="{{ Route('biodata') }}" wire:navigate class="btn btn-primary-custom w-100 mt-4">
                                    <i class="fas fa-calendar-check me-2"></i>Pesan Sekarang
                                </a>
                            @elseif (empty(auth()->user()->bedroom_id))
                                <button type="submit" class="btn btn-primary-custom w-100 mt-4">
                                    <i class="fas fa-calendar-check me-2"></i>Pesan Sekarang
                                </button>
                            @else
                                <button type="button" class="btn btn-primary-custom w-100 mt-4" onclick="Swal.fire('Info', 'Mohon maaf, anda sudah mempunyai kamar.', 'info')">
                                    <i class="fas fa-calendar-check me-2"></i>Pesan Sekarang
                                </button>
                            @endif
                        @else
                            <a href="{{ Route('login') }}" wire:navigate class="btn btn-primary-custom w-100 mt-4">
                                <i class="fas fa-calendar-check me-2"></i>Pesan Sekarang
                            </a>
                        @endif
                    </form>

                    <div class="text-center mt-3">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Tidak ada biaya tersembunyi
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @script
        <script>
            const hargaPerBulan = {{ $bedId->price }};

            function formatRupiah(angka) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(angka);
            }

            function updatePriceDetail() {
                const durasi = $('#durasi').val();
                const priceDetail = $('#priceDetail');

                if (durasi) {
                    const totalHarga = hargaPerBulan * parseInt(durasi);

                    $('#durasiValue').text(durasi + ' Bulan');
                    $('#totalHarga').text(formatRupiah(totalHarga));

                    priceDetail.show();
                } else {
                    priceDetail.hide();
                }
            }

            $(document).ready(function() {
                $('#durasi').on('change', updatePriceDetail);

                $('#bookingForm').on('submit', function(e) {
                    e.preventDefault();

                    const tanggalMasuk = $('#tanggalMasuk').val();
                    const durasi = $('#durasi').val();

                    if (!tanggalMasuk || !durasi) {
                        alert('Mohon lengkapi semua field!');
                        return;
                    }

                });

                // Set minimum date to today
                $('#tanggalMasuk').attr('min', new Date().toISOString().split('T')[0]);
            });
        </script>
    @endscript

</div>
