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
                        <a href="#about" class="btn-get-started">Mulai dari sini</a>
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

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>Tentang Kami</h3>
                    <h2>lebih dari sekedar kos</h2>
                    <p>Kami hadir untuk memberikan solusi terbaik bagi Anda yang sedang mencari tempat tinggal nyaman dan terjangkau. Kamar kos yang kami tawarkan dirancang dengan penuh perhatian
                        untuk memenuhi kebutuhan dan kenyamanan penghuninya. Kami memahami betul pentingnya memiliki ruang yang tidak hanya fungsional, tetapi juga mendukung produktivitas dan
                        kualitas hidup.</p>
                    {{-- <a href="#" class="read-more"><span>Baca lebih lanjut!</span><i class="bi bi-arrow-right"></i></a> --}}
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Cerita Kami</h3>
                                <p>Kami hadir untuk memberikan tempat tinggal yang nyaman dan terjangkau, selalu berusaha memberikan yang terbaik.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Kenyamanan yang Terjamin</h3>
                                <p>Kamar kami dirancang untuk kenyamanan maksimal dengan fasilitas lengkap dan suasana tenang.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Komitmen kami</h3>
                                <p>Kami menjaga kualitas dan kebersihan untuk kenyamanan penghuni.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Tim kami</h3>
                                <p>Tim kami siap memberikan pelayanan terbaik untuk pengalaman tinggal yang menyenangkan.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-emoji-smile"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $customer }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total Pelanggan</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-journal-richtext"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $bedroom }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total Kamar</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-headset"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $user }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Respon Layanan</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-people"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Pengunjung Website</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Details Section -->
    <section id="details" class="details section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Kos</h2>
            <div><span class="description-title">Layanan Kos</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('front-assets/assets/img/details-1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Kenyamanan dan Keamanan Terjamin</h3>
                    <p class="fst-italic">
                        Kami menyediakan layanan kos dengan kenyamanan dan keamanan yang terjamin untuk Anda.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span> Kamar bersih dan rapi setiap hari.</span></li>
                        <li><i class="bi bi-check"></i> <span>Keamanan 24 jam dengan sistem CCTV.</span></li>
                        <li><i class="bi bi-check"></i> <span>Fasilitas lengkap untuk kebutuhan sehari-hari.</span></li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('front-assets/assets/img/details-4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Layanan Tambahan</h3>
                    <p class="fst-italic">
                        Kami juga menyediakan berbagai layanan tambahan untuk kenyamanan Anda.
                    </p>
                    <p>
                        Layanan laundry, Wi-Fi gratis, dan ruang santai bersama adalah beberapa fasilitas tambahan yang kami sediakan untuk penghuni kos.
                    </p>
                </div>
            </div><!-- Features Item -->

        </div>

    </section><!-- /Details Section -->

    <!-- Gallery Section -->
    {{-- <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallei</h2>
            <div><span>Galeri</span> <span class="description-title">Kita</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-1.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-1.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-2.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-3.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-4.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-5.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-5.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-6.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-6.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-7.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-7.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('front-assets/assets/img/gallery/bed-8.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('front-assets/assets/img/gallery/bed-8.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

            </div>

        </div>

    </section><!-- /Gallery Section --> --}}

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="{{ asset('front-assets/assets/img/gallery/kos.jpg') }}" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('front-assets/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Kos ini sangat nyaman dan aman. Fasilitasnya lengkap dan pelayanannya sangat memuaskan. Saya sangat merekomendasikan tempat ini.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('front-assets/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Tempat kos ini sangat bersih dan rapi. Saya merasa sangat nyaman tinggal di sini. Pemiliknya juga sangat ramah dan membantu.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('front-assets/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Saya sangat puas dengan fasilitas yang disediakan di kos ini. Kamar yang nyaman dan suasana yang tenang membuat saya betah tinggal di sini.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('front-assets/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Kos ini sangat cocok untuk para pekerja freelance seperti saya. Fasilitas Wi-Fi yang cepat dan suasana yang tenang sangat mendukung produktivitas saya.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('front-assets/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Saya sangat merekomendasikan kos ini untuk para entrepreneur. Fasilitas yang lengkap dan pelayanan yang baik membuat saya sangat puas.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tim</h2>
            <div><span>Tim</span> <span class="description-title">Kami</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5 justify-content-around">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('front-assets/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Gilang S.</h4>
                            <span>Pendiri</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('front-assets/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sogol's</h4>
                            <span>Developer</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kamar</h2>
            <div><span>Cek Harga Kamar</span> <span class="description-title">Kos</span></div>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Kamar Standar</h3>
                        <p class="description">Kamar standar dengan fasilitas dasar yang nyaman dan terjangkau.</p>
                        <h4><sup>Rp</sup>850.000<span> / bulan</span></h4>
                        <a href="{{ route('booking') }}" wire:navigate class="cta-btn">Cek Detail</a>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Kasur dan lemari</span></li>
                            <li><i class="bi bi-check"></i> <span>Meja belajar</span></li>
                            <li><i class="bi bi-check"></i> <span>Kamar mandi dalam</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>AC</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Wi-Fi</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pricing-item featured">
                        <p class="popular">Popular</p>
                        <h3>Kamar Mewah</h3>
                        <p class="description">Kamar Mewah dengan fasilitas lengkap untuk kenyamanan maksimal.</p>
                        <h4><sup>Rp</sup>1.500.000<span> / bulan</span></h4>
                        <a href="{{ route('booking') }}" wire:navigate class="cta-btn">Cek Detail</a>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Kasur dan lemari</span></li>
                            <li><i class="bi bi-check"></i> <span>Meja belajar</span></li>
                            <li><i class="bi bi-check"></i> <span>Kamar mandi dalam</span></li>
                            <li><i class="bi bi-check"></i> <span>AC</span></li>
                            <li><i class="bi bi-check"></i> <span>Wi-Fi</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pricing-item">
                        <h3>kamar Istimewa</h3>
                        <p class="description">Kamar Istimewa dengan fasilitas premium untuk pengalaman tinggal yang mewah.</p>
                        <h4><sup>Rp</sup>1.999.000<span> / bulan</span></h4>
                        <a href="{{ route('booking') }}" wire:navigate class="cta-btn">Cek Detail</a>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Kasur dan lemari</span></li>
                            <li><i class="bi bi-check"></i> <span>Meja belajar</span></li>
                            <li><i class="bi bi-check"></i> <span>Kamar mandi dalam</span></li>
                            <li><i class="bi bi-check"></i> <span>AC</span></li>
                            <li><i class="bi bi-check"></i> <span>Wi-Fi</span></li>
                            <li><i class="bi bi-check"></i> <span>TV</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->
            </div>
        </div>
    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <div class="container-fluid">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3><span>Pertanyaan yang Sering </span><strong>Diajukan</strong></h3>
                        <p>
                            Temukan jawaban atas pertanyaan seputar pencarian dan pemesanan kos. Hubungi kami jika membutuhkan bantuan lebih lanjut!
                        </p>
                    </div>

                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-item faq-active">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana cara memesan kamar kos?</h3>
                            <div class="faq-content">
                                <p>Anda bisa klik di navbar kamar kos, lalu pilih kamar yang anda sukai, lalu anda bisa memesannya langsung dari situ.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah bisa melihat fasilitas yang ada?</h3>
                            <div class="faq-content">
                                <p>Ya, anda bisa melihat fasilitas kamar yang didapatkan di detail kamar nya</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah pembayarannya aman?</h3>
                            <div class="faq-content">
                                <p>Tentu saja, disini bisa di cek langsung oleh sang pemilik, tanpa adanya perantara, jika anda ragu, anda bisa melihat testimoni yang telah tersedia</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 order-1 order-lg-2">
                    <img src="{{ asset('front-assets/assets/img/faq.jpg') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                </div>
            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak</h2>
            <div><span>Kontak</span> <span class="description-title">Kami</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Mojokerto, Jawa Timur, Indonesia</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Hubungi Kami</h3>
                            <p>+62 857 0422 9619</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>gilangsampurno125@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="#hero" class="logo d-flex align-items-center">
                        <span class="sitename">KostDelapanBelas</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Kutorejo</p>
                        <p>Mojokerto, Jawa Timur</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 857 0422 9619</span></p>
                        <p><strong>Email:</strong> <span>gilangsampurno@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://wa.me/+6285704229619" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://www.facebook.com/gudall.gudall.39" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/glngbrik" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/gilang-sampurno-085285343/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Link Terkait</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Kamar Kos </a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kos</h4>
                    <ul>
                        <li><a href="#">Kamar Bersih</a></li>
                        <li><a href="#">Keamanan 24 Jam</a></li>
                        <li><a href="#">Wi-Fi Gratis</a></li>
                        <li><a href="#">Layanan Laundry</a></li>
                    </ul>
                </div>

                {{-- <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Buletin Kami</h4>
                    <p>Berlangganan buletin kami dan dapatkan berita terbaru tentang produk dan layanan kami!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div> --}}

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Developed by</span> <strong class="px-1 sitename">Sogol</strong> <span>RoomStay Solutions</span></p>
            <div class="credits">
                Designed by <a href="https://github.com/sogolbrik" target="_blank">Sogol</a>
            </div>
        </div>

    </footer>
</div>
