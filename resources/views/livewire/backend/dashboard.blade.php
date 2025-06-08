<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Terjual <span>| Bulan Ini</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $sale ?? 0 }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Pemasukan <span>| Bulan Ini</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Rp{{ number_format($revenue, 0, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Pelanggan <span>| Bulan Ini</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $customer ?? 100 }}</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- End Customers Card -->

                    <!-- Bedroom Availabel Card -->
                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Kamar Kosong</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-hotel-bed-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $available ?? 10 }}</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- End Bedroom Available Card -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <h5 class="card-title">Data Transaksi <span>| Bulan ini</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Pelanggan</th>
                                            <th scope="col">Kamar</th>
                                            <th scope="col">Periode</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->user->name }}</td>
                                                <td>{{ $item->bedroom->name }}</td>
                                                <td>{{ date('F Y', strtotime($item->billing_period)) }}</td>
                                                <td>
                                                    @if ($item->status == 'Ditunda')
                                                        <span class="badge bg-warning mt-2 text-light shadow-sm">{{ $item->status }}</span>
                                                    @elseif ($item->status == 'Disetujui')
                                                        <span class="badge bg-success mt-2 text-light shadow-sm">{{ $item->status }}</span>
                                                    @elseif ($item->status == 'Ditolak')
                                                        <span class="badge bg-danger mt-2 text-light shadow-sm">{{ $item->status }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    {{-- Chart --}}
                    {{-- <div class="container mt-5">
                        <h2 class="fs-2">Revenue and Total Customers per Bedroom</h2>
                        <div>
                            <label for="month">Choose Month:</label>
                            <select id="month" class="form-select" style="width: 20%" onchange="loadChartData()">
                                <option value="0" selected disabled>{{ date('F') }}</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <canvas id="revenueChart" width="100" height="100"></canvas>
                    </div>
    
                    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        let revenueChart;
    
                        function loadChartData() {
                            const month = document.getElementById('month').value;
    
                            axios.get(`/api/data-revenue?month=${month}`)
                                .then(response => {
                                    const data = response.data;
    
                                    if (revenueChart) revenueChart.destroy();
    
                                    const ctx = document.getElementById('revenueChart').getContext('2d');
                                    revenueChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: data.label,
                                            datasets: [{
                                                    label: 'Revenue (Rp)',
                                                    data: data.revenue,
                                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                    borderColor: 'rgba(75, 192, 192, 1)',
                                                    borderWidth: 1
                                                },
                                                {
                                                    label: 'Total Customer',
                                                    data: data.customer,
                                                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                                                    borderColor: 'rgba(153, 102, 255, 1)',
                                                    borderWidth: 1
                                                }
                                            ]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                })
                                .catch(error => console.error(error));
                        }
    
                        document.addEventListener('DOMContentLoaded', loadChartData);
                    </script> --}}

                </div>
            </div>
        </div>
    </section>

    {{-- <div>
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
                background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%);
                color: white;
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
    
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-primary" href="#">
                    <i class="fas fa-home me-2"></i>Kos Modern
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user me-1"></i>Pesanan Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-phone me-1"></i>Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container text-center">
                <h1 class="hero-title">Pilih Kamar Terbaik Anda</h1>
                <p class="hero-subtitle">Temukan kenyamanan hunian yang sesuai dengan kebutuhan Anda</p>
            </div>
        </section>
    
        <!-- Room Selection Section -->
        <div class="container">
            <h2 class="section-title">Kamar Tersedia</h2>
            
            <div class="row">
                <!-- Available Room 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&h=250&fit=crop" 
                                 class="card-img-top" alt="Kamar Deluxe">
                            <span class="status-badge status-available">Tersedia</span>
                        </div>
                        <div class="card-body">
                            <h5 class="room-name">Kamar Deluxe A1</h5>
                            <p class="room-description">
                                Kamar luas dengan AC, WiFi gratis, lemari besar, meja belajar, dan kamar mandi dalam. 
                                Lokasi strategis dekat kampus dan pusat kota.
                            </p>
                            <div class="amenities">
                                <span class="amenity-tag"><i class="fas fa-snowflake me-1"></i>AC</span>
                                <span class="amenity-tag"><i class="fas fa-wifi me-1"></i>WiFi</span>
                                <span class="amenity-tag"><i class="fas fa-bath me-1"></i>K. Mandi Dalam</span>
                            </div>
                            <div class="room-price">Rp 1.200.000<small class="text-muted">/bulan</small></div>
                            <button class="btn btn-primary btn-detail w-100">
                                <i class="fas fa-eye me-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Available Room 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400&h=250&fit=crop" 
                                 class="card-img-top" alt="Kamar Standard">
                            <span class="status-badge status-available">Tersedia</span>
                        </div>
                        <div class="card-body">
                            <h5 class="room-name">Kamar Standard B2</h5>
                            <p class="room-description">
                                Kamar nyaman dengan fasilitas lengkap, kipas angin, WiFi, lemari, meja belajar. 
                                Kamar mandi luar bersih dan terawat.
                            </p>
                            <div class="amenities">
                                <span class="amenity-tag"><i class="fas fa-fan me-1"></i>Kipas</span>
                                <span class="amenity-tag"><i class="fas fa-wifi me-1"></i>WiFi</span>
                                <span class="amenity-tag"><i class="fas fa-utensils me-1"></i>Dapur Umum</span>
                            </div>
                            <div class="room-price">Rp 800.000<small class="text-muted">/bulan</small></div>
                            <button class="btn btn-primary btn-detail w-100">
                                <i class="fas fa-eye me-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Occupied Room 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card occupied">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=400&h=250&fit=crop" 
                                 class="card-img-top" alt="Kamar Premium">
                            <span class="status-badge status-occupied">Dihuni</span>
                        </div>
                        <div class="card-body">
                            <h5 class="room-name">Kamar Premium C1</h5>
                            <p class="room-description">
                                Kamar premium dengan balkon, AC, WiFi, TV LED, lemari besar, meja kerja, 
                                dan kamar mandi dalam yang mewah.
                            </p>
                            <div class="amenities">
                                <span class="amenity-tag"><i class="fas fa-snowflake me-1"></i>AC</span>
                                <span class="amenity-tag"><i class="fas fa-tv me-1"></i>TV LED</span>
                                <span class="amenity-tag"><i class="fas fa-door-open me-1"></i>Balkon</span>
                            </div>
                            <div class="room-price">Rp 1.500.000<small class="text-muted">/bulan</small></div>
                            <button class="btn btn-occupied w-100" disabled>
                                <i class="fas fa-lock me-2"></i>Tidak Tersedia
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Available Room 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=400&h=250&fit=crop" 
                                 class="card-img-top" alt="Kamar Executive">
                            <span class="status-badge status-available">Tersedia</span>
                        </div>
                        <div class="card-body">
                            <h5 class="room-name">Kamar Executive D1</h5>
                            <p class="room-description">
                                Kamar executive dengan desain modern, AC, WiFi premium, area kerja luas, 
                                dan fasilitas premium lainnya.
                            </p>
                            <div class="amenities">
                                <span class="amenity-tag"><i class="fas fa-snowflake me-1"></i>AC</span>
                                <span class="amenity-tag"><i class="fas fa-laptop me-1"></i>Meja Kerja</span>
                                <span class="amenity-tag"><i class="fas fa-shield-alt me-1"></i>Keamanan 24 Jam</span>
                            </div>
                            <div class="room-price">Rp 1.800.000<small class="text-muted">/bulan</small></div>
                            <button class="btn btn-primary btn-detail w-100">
                                <i class="fas fa-eye me-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Occupied Room 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card occupied">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=400&h=250&fit=crop" 
                                 class="card-img-top" alt="Kamar Budget">
                            <span class="status-badge status-occupied">Dihuni</span>
                        </div>
                        <div class="card-body">
                            <h5 class="room-name">Kamar Budget E1</h5>
                            <p class="room-description">
                                Kamar budget yang nyaman dan bersih, dilengkapi dengan fasilitas dasar 
                                seperti kipas angin, lemari, dan meja belajar.
                            </p>
                            <div class="amenities">
                                <span class="amenity-tag"><i class="fas fa-fan me-1"></i>Kipas</span>
                                <span class="amenity-tag"><i class="fas fa-wifi me-1"></i>WiFi</span>
                                <span class="amenity-tag"><i class="fas fa-parking me-1"></i>Parkir</span>
                            </div>
                            <div class="room-price">Rp 600.000<small class="text-muted">/bulan</small></div>
                            <button class="btn btn-occupied w-100" disabled>
                                <i class="fas fa-lock me-2"></i>Tidak Tersedia
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Available Room 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card room-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=400&h=250&fit=crop" 
                                 class="card-img-top" alt="Kamar Studio">
                            <span class="status-badge status-available">Tersedia</span>
                        </div>
                        <div class="card-body">
                            <h5 class="room-name">Kamar Studio F1</h5>
                            <p class="room-description">
                                Kamar studio spacious dengan kitchenette, AC, WiFi, area living yang nyaman, 
                                cocok untuk mahasiswa atau pekerja profesional.
                            </p>
                            <div class="amenities">
                                <span class="amenity-tag"><i class="fas fa-utensils me-1"></i>Kitchenette</span>
                                <span class="amenity-tag"><i class="fas fa-snowflake me-1"></i>AC</span>
                                <span class="amenity-tag"><i class="fas fa-couch me-1"></i>Living Area</span>
                            </div>
                            <div class="room-price">Rp 2.000.000<small class="text-muted">/bulan</small></div>
                            <button class="btn btn-primary btn-detail w-100">
                                <i class="fas fa-eye me-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5><i class="fas fa-home me-2"></i>Kos Modern</h5>
                        <p>Menyediakan hunian nyaman dan terjangkau dengan fasilitas lengkap untuk kehidupan yang lebih baik.</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Kontak</h6>
                        <p><i class="fas fa-phone me-2"></i>+62 812-3456-7890</p>
                        <p><i class="fas fa-envelope me-2"></i>info@kosmodern.com</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Pendidikan No. 123, Jakarta</p>
                    </div>
                </div>
                <hr class="my-4">
                <div class="text-center">
                    <p>&copy; 2025 Kos Modern. All rights reserved.</p>
                </div>
            </div>
        </footer>
    
        <script>
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
        </script>
    </div> --}}
    
</div>
