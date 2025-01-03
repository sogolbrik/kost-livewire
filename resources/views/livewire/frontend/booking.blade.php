<div>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('front-assets/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('uploads/img/bedtrans.png') }}" class="img-fluid animated" alt="">
                </div>

                <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1>Ruang Nyaman, Hidup Tenang bersama <span>Kost18</span></h1>
                    <p>Jangan tunggu lama, kamar terbaikmu siap ditempati. Nyaman, aman, dan asri hanya untuk kamu!</p>
                    <div class="d-flex">
                        <a href="#pricing" class="btn-get-started">Mulai dari sini</a>
                    </div>
                </div>

            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>

    </section><!-- /Hero Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section mt-4">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Booking</h2>
            <div><span>Pesan</span> <span class="description-title">Kamar</span></div>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @forelse ($bedroom as $see)
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <div class="gallery-item mb-2">
                                <a href="{{ Storage::url($see->photo) }}" class="glightbox" data-gallery="images-gallery">
                                    <img src="{{ Storage::url($see->photo) }}" alt="{{ $see->name }}" class="img-fluid rounded">
                                </a>
                            </div>
                            <h3>{{ $see->type }}</h3>
                            <p class="description">{{ $see->description }}</p>
                            <h4><sup>Rp</sup>{{ number_format($see->price, 0, ',', '.') }}<br><span> / bulan</span></h4>
                            <a href="{{ route('booking.detail', $see->id) }}" wire:navigate class="cta-btn">Detail Kamar</a>
                        </div>
                    </div><!-- End Pricing Item -->
                @empty
                    <div class="d-flex justify-content-center">
                        <h2 class="fw-semibold">Belum ada kamar.</h2>
                    </div>
                @endforelse
            </div>

            {{-- Backup --}}
            {{-- <div class="row gy-4">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Standard Room</h3>
                        <p class="description">Kamar standar dengan fasilitas dasar yang nyaman dan terjangkau.</p>
                        <h4><sup>Rp</sup>750.000<span> / bulan</span></h4>
                        <a href="#" class="cta-btn">Pesan Sekarang</a>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Kasur dan lemari</span></li>
                            <li><i class="bi bi-check"></i> <span>Meja belajar</span></li>
                            <li><i class="bi bi-check"></i> <span>Kamar mandi dalam</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>AC</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Wi-Fi</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

            </div> --}}
        </div>
    </section><!-- /Pricing Section -->

</div>
