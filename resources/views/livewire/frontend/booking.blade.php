<div class="mt-5">
    <style>
        :root {
            --primary-blue: #2563eb;
            --light-blue: #dbeafe;
            --dark-blue: #1d4ed8;
            --accent-blue: #3b82f6;
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
            /* background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%); */
            /* color: white; */
            background: rgba(255, 255, 255, 0);
            /* Semi-transparent blue */
            padding: 4rem 0 2rem;
            margin-bottom: 3rem;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .room-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
            margin-bottom: 2rem;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .room-card.occupied {
            opacity: 0.7;
            background: #f8f9fa;
        }

        .room-card.occupied:hover {
            transform: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .room-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .room-card.occupied .card-img-top {
            filter: grayscale(50%);
        }

        .card-body {
            padding: 2rem;
        }

        .room-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }

        .room-description {
            color: #6b7280;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .room-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
        }

        .btn-detail {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-blue) 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-detail:hover {
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.4);
        }

        .btn-occupied {
            background: #dc2626;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            cursor: not-allowed;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-available {
            background: #10b981;
            color: white;
        }

        .status-occupied {
            background: #dc2626;
            color: white;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-blue) 100%);
            border-radius: 2px;
        }

        .amenities {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 1.5rem;
        }

        .amenity-tag {
            background: var(--light-blue);
            color: var(--primary-blue);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .footer {
            background: var(--primary-blue);
            color: white;
            padding: 3rem 0;
            margin-top: 5rem;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .card-body {
                padding: 1.5rem;
            }
        }
    </style>

    <!-- Hero Section -->
    <div class="container">
        <section class="container hero-section position-relative">
            <div class="text-center">
                <h1 class="hero-title">Pilih Kamar Terbaik Anda</h1>
                <p class="hero-subtitle">Temukan kenyamanan hunian yang sesuai dengan kebutuhan Anda</p>
            </div>
            @foreach ($transaction as $item)
                @if ($item->status_payment == 'new')
                    <div class="position-absolute d-md-block d-none" style="top: 60px; right: 0px;">
                        <a href="{{ route('transaction.detail') }}" wire:navigate>
                            <i class="bi bi-bookmark-fill" style="font-size: 20px;"></i>
                            <p style="display: inline; font-size: 20px;" class="text-decoration-underline fw-bold">Pesanan Saya</p>
                        </a>
                    </div>
                    <div class="d-md-none text-center mt-3">
                        <a href="{{ route('transaction.detail') }}" wire:navigate>
                            <i class="bi bi-bookmark-fill" style="font-size: 16px;"></i>
                            <p style="display: inline; font-size: 16px;" class="text-decoration-underline fw-bold">Pesanan Saya</p>
                        </a>
                    </div>
                @endif
            @endforeach
        </section>
    </div>

    <!-- Room Selection Section -->
    <div class="container">
        <h2 class="section-title">Kamar Tersedia</h2>

        <div class="row">
            @forelse ($bedroom as $see)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card @if ($see->status == 'Terisi') occupied @endif">
                        <div class="position-relative">

                            @if ($see->photo == null)
                                @if ($see->type == 'Kamar Standar')
                                    <img src="{{ asset('seed/bedroom/standar.jpg') }}" alt="{{ $see->name }}" class="card-img-top" alt="{{ $see->name }}">
                                @elseif ($see->type == 'Kamar Mewah')
                                    <img src="{{ asset('seed/bedroom/mewah.jpg') }}" alt="{{ $see->name }}" class="card-img-top" alt="{{ $see->name }}">
                                @elseif ($see->type == 'Kamar Istimewa')
                                    <img src="{{ asset('seed/bedroom/istimewa.jpg') }}" alt="{{ $see->name }}" class="card-img-top" alt="{{ $see->name }}">
                                @endif
                            @else
                                <img src="{{ Storage::url($see->photo) }}" alt="{{ $see->name }}" class="card-img-top" alt="{{ $see->name }}">
                            @endif

                            @if ($see->status == 'Tersedia')
                                <span class="status-badge status-available">Tersedia</span>
                            @else
                                <span class="status-badge status-occupied">Dihuni</span>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="room-name">{{ $see->name }}</h5>
                            <p class="room-description">
                                {{ $see->description ?? 'Kamar dengan fasilitas lengkap, ideal untuk tinggal nyaman.' }}
                            </p>
                            <div class="amenities">
                                @if ($see->type == 'Kamar Standar')
                                    <span class="amenity-tag"><i class="fas fa-bed me-1"></i>Kasur & Bantal</span>
                                    <span class="amenity-tag"><i class="fas fa-wifi me-1"></i>WiFi</span>
                                    <span class="amenity-tag"><i class="fas fa-plug me-1"></i>Stopkontak</span>
                                @elseif($see->type == 'Kamar Mewah')
                                    <span class="amenity-tag"><i class="fas fa-chair me-1"></i>Kursi & Meja</span>
                                    <span class="amenity-tag"><i class="fas fa-tv me-1"></i>TV</span>
                                    <span class="amenity-tag"><i class="fas fa-snowflake me-1"></i>AC</span>
                                @elseif($see->type == 'Kamar Istimewa')
                                    <span class="amenity-tag"><i class="fas fa-utensils me-1"></i>Dapur Pribadi</span>
                                    <span class="amenity-tag"><i class="fas fa-shower me-1"></i>K. Mandi Dalam</span>
                                    <span class="amenity-tag"><i class="fas fa-shoe-prints me-1"></i>Rak Sepatu</span>
                                @endif
                            </div>
                            <div class="room-price">Rp {{ number_format($see->price, 0, ',', '.') }}<small class="text-muted">/bulan</small></div>
                            @if ($see->status == 'Tersedia')
                                <a href="{{ route('booking.detail', $see->id) }}" wire:navigate class="btn btn-primary btn-detail w-100">
                                    <i class="fas fa-eye me-2"></i>Lihat Detail
                                </a>
                            @else
                                <button class="btn btn-occupied w-100" disabled>
                                    <i class="fas fa-lock me-2"></i>Tidak Tersedia
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="d-flex justify-content-center">
                    <h2 class="fw-semibold">Belum ada kamar.</h2>
                </div>
            @endforelse
            <!-- Available Room 1 -->

        </div>
    </div>

    <!-- Footer -->
    <footer class="footer dark-background">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-home me-2"></i>KostDelapanBelas</h5>
                    <p>Menyediakan hunian nyaman dan terjangkau dengan fasilitas lengkap untuk kehidupan yang lebih baik.</p>
                </div>
                <div class="col-md-6">
                    <h6>Kontak</h6>
                    <p><i class="fas fa-phone me-2"></i>+62 857-0422-9619</p>
                    <p><i class="fas fa-envelope me-2"></i>gilangsampurno125@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Diponegoro, Kutorejo, Mojokerto</p>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Developed by</span> <strong class="px-1 sitename">GlgDev</strong> <span>Solusi Kos Terbaik</span></p>
                <div class="credits">
                    Designed by <a href="https://github.com/sogolbrik" target="_blank">GlgDev</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- <script>
        // Add smooth scrolling and interaction effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to available rooms
            const availableCards = document.querySelectorAll('.room-card:not(.occupied)');
            availableCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Handle detail button clicks
            const detailButtons = document.querySelectorAll('.btn-detail');
            detailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const roomName = this.closest('.card-body').querySelector('.room-name').textContent;
                    alert(`Menampilkan detail untuk ${roomName}`);
                    // Here you would typically redirect to detail page or show modal
                });
            });
        });
    </script> --}}
</div>

{{-- <div>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section mt-5 light-background">

        <!-- Section Title -->
        <div class="container section-title d-flex justify-content-between align-items-center" data-aos="fade-up">
            <div>
                <h2>Booking</h2>
                <div><span>Pesan</span> <span class="description-title">Kamar</span></div>
            </div>
            @foreach ($transaction as $item)
                @if ($item->status_payment == 'new')
                    <div>
                        <a href="{{ route('transaction.detail') }}" wire:navigate><i class="bi bi-bookmark-fill" style="font-size: 16px;"></i>
                            <p style="display: inline; font-size: 16px;" class="text-decoration-underline">pesanan saya</p>
                        </a>
                    </div>
                @endif
            @endforeach
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @forelse ($bedroom as $see)
                    <div class="col-lg-4 shadow-sm" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <div class="gallery-item mb-2">
                                @if ($see->photo == null)
                                    @if ($see->type == 'Kamar Standar')
                                        <a href="{{ asset('seed/bedroom/standar.jpg') }}" class="glightbox" data-gallery="images-gallery">
                                            <img src="{{ asset('seed/bedroom/standar.jpg') }}" alt="{{ $see->name }}" class="img-fluid rounded">
                                        </a>
                                    @elseif ($see->type == 'Kamar Mewah')
                                        <a href="{{ asset('seed/bedroom/mewah.jpg') }}" class="glightbox" data-gallery="images-gallery">
                                            <img src="{{ asset('seed/bedroom/mewah.jpg') }}" alt="{{ $see->name }}" class="img-fluid rounded">
                                        </a>
                                    @elseif ($see->type == 'Kamar Istimewa')
                                        <a href="{{ asset('seed/bedroom/istimewa.jpg') }}" class="glightbox" data-gallery="images-gallery">
                                            <img src="{{ asset('seed/bedroom/istimewa.jpg') }}" alt="{{ $see->name }}" class="img-fluid rounded">
                                        </a>
                                    @endif
                                @else
                                    <a href="{{ Storage::url($see->photo) }}" class="glightbox" data-gallery="images-gallery">
                                        <img src="{{ Storage::url($see->photo) }}" alt="{{ $see->name }}" class="img-fluid rounded">
                                    </a>
                                @endif
                            </div>
                            <h3>{{ $see->type }}</h3>
                            <p class="description">{{ $see->description }}</p>
                            <h4><sup>Rp</sup>{{ number_format($see->price, 0, ',', '.') }}<br><span> / bulan</span></h4>
                            @if ($see->status == 'Tersedia')
                                <a href="{{ route('booking.detail', $see->id) }}" wire:navigate class="cta-btn">Detail Kamar</a>
                            @else
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-danger mt-4" disabled>Tidak Tersedia</button>
                                </div>
                            @endif
                        </div>
                    </div><!-- End Pricing Item -->
                @empty
                    <div class="d-flex justify-content-center">
                        <h2 class="fw-semibold">Belum ada kamar.</h2>
                    </div>
                @endforelse
            </div>

        </div>
    </section><!-- /Pricing Section -->

</div> --}}
