<div>

    <style>
        :root {
            --primary-blue: #2563eb;
            --light-blue: #dbeafe;
            --dark-blue: #1d4ed8;
            --accent-blue: #3b82f6;
            --success-green: #10b981;
            --warning-orange: #f59e0b;
            --danger-red: #ef4444;
        }

        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%);
            color: white;
            padding: 3rem 0 2rem;
            margin-bottom: 3rem;
        }

        .hero-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .breadcrumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 0.75rem 1rem;
            margin-top: 1.5rem;
        }

        .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            color: white;
        }

        .breadcrumb-item.active {
            color: white;
        }

        .order-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border: none;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .order-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-blue) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .order-id {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .order-date {
            opacity: 0.9;
            font-size: 1rem;
        }

        .order-body {
            padding: 2.5rem;
        }

        .info-section {
            background: #f8fafc;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            border-left: 5px solid var(--primary-blue);
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 0.5rem;
            width: 20px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #4b5563;
            display: flex;
            align-items: center;
        }

        .info-label i {
            margin-right: 0.5rem;
            color: var(--primary-blue);
            width: 16px;
        }

        .info-value {
            font-weight: 700;
            color: #1f2937;
            text-align: right;
        }

        .status-badge {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-paid {
            background: var(--success-green);
            color: white;
        }

        .status-pending {
            background: var(--warning-orange);
            color: white;
        }

        .status-failed {
            background: var(--danger-red);
            color: white;
        }

        .room-preview {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .room-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .room-info {
            padding: 1.5rem;
        }

        .room-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }

        .room-type {
            color: #6b7280;
            font-weight: 500;
        }

        .price-section {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 15px;
            padding: 2rem;
            border: 2px solid var(--light-blue);
        }

        .total-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            text-align: center;
            margin-bottom: 1rem;
        }

        .price-breakdown {
            font-size: 1rem;
            color: #6b7280;
            text-align: center;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-blue) 100%);
            border: none;
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
            flex: 1;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.4);
        }

        .btn-outline-custom {
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
            flex: 1;
            background: transparent;
        }

        .btn-outline-custom:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--light-blue);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-marker {
            position: absolute;
            left: -27px;
            width: 12px;
            height: 12px;
            background: var(--primary-blue);
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 3px var(--light-blue);
        }

        .timeline-content {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .timeline-date {
            font-size: 0.85rem;
            color: #6b7280;
            font-weight: 500;
        }

        .timeline-title {
            font-weight: 600;
            color: var(--primary-blue);
            margin: 0.5rem 0;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 1.8rem;
            }

            .order-body {
                padding: 1.5rem;
            }

            .info-section {
                padding: 1.5rem;
            }

            .action-buttons {
                flex-direction: column;
            }

            .total-price {
                font-size: 2rem;
            }
        }
    </style>

    <!-- Order Detail Section -->
    <div class="container" style="margin-top: 110px">
        <div class="row">
            <div class="col-lg-8">
                <!-- Order Information Card -->
                <div class="order-card">
                    <div class="order-header">
                        <div class="order-id">#{{ $transaction->code }}</div>
                        <div class="order-date">Pesanan dibuat pada {{ date('d F Y', strtotime($transaction->payment_date)) }}</div>
                    </div>

                    <div class="order-body">
                        <!-- Customer Information -->
                        <div class="info-section">
                            <h3 class="section-title">
                                <i class="fas fa-user"></i>
                                Informasi Pelanggan
                            </h3>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-id-card"></i>
                                    Nama Pelanggan
                                </div>
                                <div class="info-value">{{ auth()->user()->name }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </div>
                                <div class="info-value">{{ auth()->user()->email }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-phone"></i>
                                    No. Telepon
                                </div>
                                <div class="info-value">{{ auth()->user()->phone }}</div>
                            </div>
                        </div>

                        <!-- Room Information -->
                        <div class="info-section">
                            <h3 class="section-title">
                                <i class="fas fa-bed"></i>
                                Informasi Kamar
                            </h3>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-door-open"></i>
                                    Nama Kamar
                                </div>
                                <div class="info-value">{{ $transaction->bedroom->name }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-home"></i>
                                    Tipe Kamar
                                </div>
                                <div class="info-value">{{ $transaction->bedroom->type }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-calendar-alt"></i>
                                    Tanggal Masuk
                                </div>
                                <div class="info-value">{{ date('d F Y', strtotime($transaction->entering_room)) }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-clock"></i>
                                    Durasi Sewa
                                </div>
                                <div class="info-value">{{ $transaction->duration }} Bulan</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-calendar-check"></i>
                                    Tanggal Berakhir
                                </div>
                                <div class="info-value">{{ date('d F Y', strtotime($transaction->entering_room . ' + ' . $transaction->duration . ' months')) }}</div>
                            </div>
                        </div>

                        <!-- Payment Information -->
                        <div class="info-section">
                            <h3 class="section-title">
                                <i class="fas fa-credit-card"></i>
                                Informasi Pembayaran
                            </h3>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-calendar"></i>
                                    Tanggal Pembayaran
                                </div>
                                {{-- <div class="info-value">{{ date('d F Y', strtotime($transaction->created_at)) }}</div> --}}
                                <div class="info-value">{{ $transaction->created_at }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-money-bill"></i>
                                    Harga per Bulan
                                </div>
                                <div class="info-value">Rp {{ number_format($transaction->bedroom->price, 0, ',', '.') }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-calculator"></i>
                                    Total Harga
                                </div>
                                <div class="info-value">Rp {{ number_format($transaction->bedroom->price * $transaction->duration, 0, ',', '.') }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-check-circle"></i>
                                    Status Pembayaran
                                </div>
                                <div class="info-value">
                                    @if ($transaction->status == 'Ditunda')
                                        <span class="status-badge status-pending">
                                            <i class="fas fa-hourglass-half me-1"></i> Menunggu
                                        </span>
                                    @elseif($transaction->status == 'Disetujui')
                                        <span class="status-badge status-paid">
                                            <i class="fas fa-check-circle me-1"></i>Lunas
                                        </span>
                                    @else
                                        <span class="status-badge status-failed">
                                            <i class="fas fa-times-circle me-1"></i> Ditolak
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">
                                    <i class="fas fa-university"></i>
                                    Metode Pembayaran
                                </div>
                                <div class="info-value">Transfer Bank</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Room Preview -->
                <div class="room-preview mb-4">
                    <img src="{{ Storage::url($transaction->bedroom->photo) }}" class="room-image" alt="{{ $transaction->bedroom->name }}">
                    <div class="room-info">
                        <div class="room-name">{{ $transaction->bedroom->name }}</div>
                        <div class="room-type">{{ $transaction->bedroom->type }}</div>
                    </div>
                </div>

                <!-- Price Summary -->
                <div class="price-section mb-4">
                    <div class="total-price">Rp {{ number_format($transaction->bedroom->price * $transaction->duration, 0, ',', '.') }}</div>
                    <div class="price-breakdown">
                        Rp {{ number_format($transaction->bedroom->price) }} × {{ $transaction->duration }} bulan<br>
                        <small class="text-muted">Sudah termasuk listrik & air</small>
                    </div>
                </div>

                <!-- Action Buttons -->
                {{-- <div class="action-buttons">
                    <button class="btn btn-primary-custom text-white">
                        <i class="fas fa-download me-2"></i>
                        Download Invoice
                    </button>
                </div> --}}
                <div class="action-buttons">
                    <a href="https://wa.me/+6285704229619" target="_blank" class="btn btn-outline-custom">
                        <i class="fas fa-headset me-2"></i>
                        Hubungi CS
                    </a>
                </div>

                <!-- Timeline -->
                <div class="mt-4">
                    <h5 class="mb-3" style="color: var(--primary-blue); font-weight: 700;">
                        <i class="fas fa-history me-2"></i>Riwayat Pesanan
                    </h5>
                    <div class="timeline">
                        @if ($transaction->status == 'Disetujui')
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">{{ date('d F Y, H:i', strtotime($transaction->updated_at)) }}</div>
                                    <div class="timeline-title">Pembayaran <span class="fw-bold">Berhasil</span></div>
                                    <small class="text-muted">Pembayaran sebesar Rp {{ number_format($transaction->bedroom->price * $transaction->duration, 0, ',', '.') }} telah diterima</small>
                                </div>
                            </div>
                        @elseif($transaction->status == 'Ditolak')
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">{{ date('d F Y, H:i', strtotime($transaction->updated_at)) }}</div>
                                    <div class="timeline-title">Pembayaran <span class="fw-bold">Ditolak</span></div>
                                    <small class="text-muted">Pembayaran sebesar Rp {{ number_format($transaction->bedroom->price * $transaction->duration, 0, ',', '.') }} telah ditolak. Silakan cek
                                        kembali informasi pembayaran atau hubungi customer service untuk bantuan lebih lanjut.</small>
                                </div>
                            </div>
                        @endif
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">{{ date('d F Y, H:i', strtotime($transaction->created_at)) }}</div>
                                <div class="timeline-title">Pesanan Dibuat</div>
                                <small class="text-muted">Pesanan {{ $transaction->bedroom->name }} berhasil dibuat</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth animations
            const cards = document.querySelectorAll('.order-card, .room-preview, .price-section');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });

            // Add timeline animation
            const timelineItems = document.querySelectorAll('.timeline-item');
            timelineItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, (index + 3) * 200);

                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                item.style.transition = 'all 0.5s ease';
            });
        });
    </script>
</div>

{{-- <div class="light-background">
    <section class="mt-4">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3>Detail Pesanan</h3>
                        </div>
                        <div class="card-body">
                            @foreach ($transaction as $item)
                                <div class="mb-3">
                                    <h5 class="mb-1 d-flex justify-content-center">Pesanan #{{ $loop->iteration }}</h5>
                                    <p><strong>Nama Pelanggan:</strong> {{ auth()->user()->name }}</p>
                                    <p><strong>Nama Kamar:</strong> {{ $item->bedroom->name }}</p>
                                    <p><strong>Tipe Kamar:</strong> {{ $item->bedroom->type }}</p>
                                    <p><strong>Tanggal Masuk:</strong> {{ date('d F Y', strtotime($item->entering_room)) }}</p>
                                    <p><strong>Durasi:</strong> {{ $item->duration }} Bulan</p>
                                    <p><strong>Tanggal Pembayaran:</strong> {{ date('d F Y', strtotime($item->payment_date)) }}</p>
                                    <p><strong>Harga:</strong> Rp{{ number_format($item->bedroom->price * $item->duration, 0, ',', '.') }}</p>
                                    @if ($item->status == 'Ditunda')
                                        <p><strong>Status Pembayaran:</strong>
                                        <p class="badge rounded-pill bg-warning shadow-sm">Menunggu</p>
                                        </p>
                                    @elseif($item->status == 'Disetujui')
                                        <p><strong>Status Pembayaran:</strong>
                                        <p class="badge rounded-pill bg-success shadow-sm">Diterima</p>
                                        </p>
                                    @elseif($item->status == 'Ditolak')
                                        <p><strong>Status Pembayaran:</strong>
                                        <p class="badge rounded-pill bg-danger shadow-sm">Ditolak</p>
                                        </p>
                                    @endif
                                    @if ($item->status == 'Disetujui')
                                        <p><strong>Catatan:</strong> Permintaan anda sudah disetujui oleh pemilik, silahkan memasuki kamar kos yang anda pilih! ( <strong>{{ $item->bedroom->name }}</strong> )</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 95px"></div>
    </section>
</div> --}}
