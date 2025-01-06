<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rental mobil murah di Bekasi dengan berbagai pilihan armada terbaik. Tersedia layanan sewa harian, mingguan, hingga bulanan, dengan atau tanpa supir. Harga terjangkau, armada terbaru, dan proses cepat. Cocok untuk perjalanan bisnis, liburan, atau acara keluarga. Dapatkan penawaran terbaik untuk rental mobil di Bekasi sekarang!">
    <meta name="keywords" content="Rental mobil murah Bekasi, Sewa mobil murah di Bekasi, Rental mobil harian Bekasi, Rental mobil bulanan Bekasi, Sewa mobil terpercaya Bekasi, Rental mobil tanpa supir Bekasi, Rental mobil dengan supir Bekasi, Sewa mobil lepas kunci Bekasi, Rental mobil online Bekasi, Jasa rental mobil Bekasi, Rental mobil murah Bekasi Barat, Rental mobil murah Bekasi Timur, Rental mobil murah Bekasi Utara, Rental mobil murah Bekasi Selatan, Rental mobil murah dekat stasiun Bekasi, Sewa mobil murah Cikarang, Rental mobil murah Tambun, Rental mobil murah Jatiasih, Rental mobil murah Pondok Gede, Rental mobil murah Harapan Indah, Sewa mobil untuk wisata di Bekasi, Rental mobil keluarga Bekasi, Sewa mobil mewah Bekasi, Rental mobil premium Bekasi, Sewa mobil elf Bekasi, Sewa mobil minibus Bekasi, Rental mobil city car Bekasi, Sewa mobil MPV murah Bekasi, Rental mobil AC dingin Bekasi, Rental mobil terbaru Bekasi, Rental mobil harga murah Bekasi, Sewa mobil diskon Bekasi, Promo rental mobil Bekasi, Sewa mobil murah mulai 100 ribu Bekasi, Harga rental mobil Bekasi terbaik, Sewa mobil murah all-in Bekasi, Rental mobil paket hemat Bekasi, Sewa mobil murah 24 jam Bekasi, Rental mobil harga terjangkau Bekasi, Sewa mobil murah cepat dan mudah Bekasi, Rental mobil antar jemput Bekasi, Sewa mobil airport Bekasi, Rental mobil Bekasi ke luar kota, Sewa mobil harian Bekasi, Rental mobil mingguan Bekasi, Rental mobil untuk acara pernikahan Bekasi, Sewa mobil event Bekasi, Sewa mobil corporate Bekasi, Rental mobil dengan layanan terbaik di Bekasi, Rental mobil murah Bekasi tanpa ribet, Sewa mobil Bekasi murah dan terpercaya, Tempat rental mobil murah Bekasi, Rekomendasi rental mobil Bekasi murah, Jasa sewa mobil murah Bekasi lepas kunci, Rental mobil untuk perjalanan keluarga Bekasi, Sewa mobil murah di pusat kota Bekasi, Rental mobil Bekasi untuk liburan, Sewa mobil Bekasi dengan supir ramah, Sewa mobil Bekasi 24 jam, Sewa mobil untuk bisnis Bekasi, Sewa mobil pernikahan Bekasi, Rental mobil Avanza murah Bekasi, Rental mobil Xenia murah Bekasi, Sewa mobil Bekasi nonstop, Rental mobil Bekasi terpercaya, Sewa mobil Bekasi all-in murah, Rental mobil Bekasi supir profesional, Rental mobil harian termurah di Bekasi, Sewa kendaraan Bekasi murah, Rental kendaraan wisata Bekasi, Rental mobil pick-up Bekasi, Sewa mobil Bekasi mingguan termurah, Rental mobil Bekasi dengan armada terbaik, Rental mobil Bekasi layanan cepat, Rental mobil Bekasi reservasi mudah, Sewa mobil Bekasi antar-kota, Rental mobil Bekasi armada lengkap, Sewa mobil Toyota Bekasi, Sewa mobil Honda murah Bekasi, Rental mobil untuk keluarga Bekasi, Rental mobil Bekasi dengan harga kompetitif, Rental kendaraan Bekasi online, Rental mobil bulanan termurah di Bekasi, Rental mobil untuk lebaran Bekasi, Rental mobil untuk liburan akhir tahun Bekasi">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kenangan Rentcar</title>
    <!-- Favicons -->
    <link href="{{ asset('./admin/img/logo1.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('storage/' . $custom->image_promo_first) }}"
                        alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl positi on-relative d-flex align-items-center justify-content-between">

            @if ($custom && $custom->logo)
                <a href="#hero" class="logo d-flex align-items-center me-auto me-xl-0">
                    <img src="{{ asset('storage/' . $custom->logo) }}" class="sitename" alt="Icon Image">
                </a>
            @else
                <p>No logo available</p>
            @endif


            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#cars">Mobil</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#contact">Kontak Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @if (auth()->check())
                <a class="btn-getstarted" href="{{ route('admin.dashboard') }}">Dashboard</a>
            @else
                <a class="btn-getstarted" href="https://wa.me/{{ $custom->no_tlpn_first_space }}?text={{ urlencode('Halo Kenangan RentCar, Saya ingin menyewa mobil, apa saja mobil yang tersedia?') }}"><i class="bi bi-whatsapp me-2"></i> WhatsApp</a>
            @endif

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-rocket-takeoff-fill me-2"></i>
                                Perjalanan Nyaman, Kenangan Tak Terlupakan!
                            </div>

                            <h1 class="mb-4">
                                Penuhi Berbagai<br>
                                Kebutuhan Perjalanan <br>
                                <span class="accent-text">Pribadi Anda</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                Kenangan Rentcar merupakan pilihan tepat untuk memenuhi berbagai kebutuhan transportasi Anda, baik untuk keperluan pribadi maupun wisata.
                            </p>

                            <div class="hero-buttons">
                                <a href="#contact" class="btn btn-primary me-0 me-sm-2 mx-1"><i class="bi bi-telephone-fill"></i> Hubungi Kami</a>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31717.492407357116!2d107.0068641!3d-6.2871856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f945244a1a9%3A0x99312cede7524996!2sSewa%20Rental%20Mobil%20Bekasi%20(Kenangan%20Rent%20Car)!5e0!3m2!1sen!2sid!4v1697101234567!5m2!1sen!2sid"
                                    class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-geo-alt-fill me-1"></i>
                                    Lokasi
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('storage/' . $custom->image_background) }}" alt="Hero Image"
                                class="img-fluid">

                            <div class="customers-badge">
                                <img src="{{ asset('storage/' . $custom->image_promo_second) }}" alt="">
                                <p class="mb-0 mt-2">{{ $custom->text_promo }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Profesional</h4>
                                <p class="mb-0">Layanan Profesional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-coin"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Terjangkau</h4>
                                <p class="mb-0">Harga Terjangkau</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-car-front"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Terbaik</h4>
                                <p class="mb-0">Kendaraan Terbaik</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Kepercayaan</h4>
                                <p class="mb-0">100+ Pelanggan percaya kepada kami</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta">TENTANG KAMI</span>
                        <h2 class="about-title">Kenangan Rentcar</h2>
                        <p class="about-description">Kenangan Rentcar hadir untuk memberikan pengalaman perjalanan
                            terbaik bagi Anda. Kami menyediakan layanan rental mobil yang nyaman, aman, dan terpercaya,
                            cocok untuk berbagai kebutuhan perjalanan Anda, baik bisnis maupun liburan.</p>
                        <p>
                            Dengan armada berkualitas dan pelayanan profesional, kami berkomitmen menciptakan kenangan
                            indah di setiap perjalanan Anda. Mari wujudkan perjalanan impian bersama Kenangan Rentcar!
                        </p>

                        <div class="row feature-list-wrapper">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Fast Response 24 Jam</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Mobil Bersih dan Terawat</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Jenis Mobil Yang Lengkap</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Hemat Waktu dan Tenaga</li>
                                </ul>
                            </div>
                        </div>

                        <div class="info-wrapper">
                            <div class="row gy-4">
                                <div class="col-lg-5">
                                    <div class="profile d-flex align-items-center gap-3">
                                        <img src="{{ asset('./admin/img/avatar/avatar-illustrated-02.png') }}" alt="Profile" class="profile-image">
                                        <div>
                                            <h4 class="profile-name">Aldan</h4>
                                            <p class="profile-position">Customer &amp; Service</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-info d-flex align-items-center gap-2">
                                        <i class="bi bi-telephone-fill"></i>
                                        <div>
                                            <p class="contact-label">Hubungi Kapan Saja</p>
                                            <p class="contact-number">{{ $custom->no_tlpn_first }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="{{ asset('storage/' . $custom->image_profile_first) }}" alt="Business Meeting"
                                    class="img-fluid main-image rounded-4">
                                <img src="{{ asset('storage/' . $custom->image_profile_second) }}" alt="Team Discussion"
                                    class="img-fluid small-image rounded-4">
                            </div>
                            <div class="experience-badge floating">
                                <h3>15+ <span>Tahun</span></h3>
                                <p>Pengalaman dalam penyewaan kendaraan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /About Section -->

        <!-- cars Section -->
        <section id="cars" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Mobil Yang Tersedia</h2>
                <p>Kami menyediakan berbagai jenis kendaraan untuk memenuhi kebutuhan perjalanan Anda, baik untuk keperluan pribadi, keluarga, maupun bisnis.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="d-flex justify-content-center">

                    <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                <h4>All</h4>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1">

                        <div class="row">
                            @foreach ($cars as $car)
                                <div class="col-12 col-sm-3 mb-3 mb-sm-0" data-aos="fade-right" data-aos-delay="300"
                                    id="ads">
                                    <div class="card">
                                        @if ($car->image)
                                            <div class="card-image">
                                                <img src="{{ asset('storage/' . $car->image) }}" alt="Car Image"
                                                    class="card-img-top">
                                                <!-----
                                        https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262
                                        ---->
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h4>{{ $car->car_type }}</h4>
                                        <h6><i class="bi bi-car-front"></i> {{ $car->type }} - <i class="bi bi-gear"></i> {{ $car->transmission_type }} - <i class="bi bi-person-standing"></i> {{ $car->seat_count }} Kursi</h6>
                                        <div>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-half text-warning"></i>
                                            <small class="text-muted">(4.5)</small>
                                        </div>
                                        <hr>
                                        <center>
                                            <span class="h6">Harga Sewa Mobil</span>
                                        </center>
                                        <hr>
                                        @foreach ($car->carRental as $carRental)
                                            <p class="card-text">
                                                Rp. {{ number_format($carRental->rental_car_price, 0, ',', '.') }} /
                                                {{ $carRental->rental_time }}
                                            </p>
                                        @endforeach
                                        <hr>
                                        <center>
                                            <span class="h6">Harga Sewa Mobil + Supir</span>
                                        </center>
                                        <hr>
                                        @foreach ($car->carRental as $carRental)
                                            <p class="card-text">
                                                Rp.
                                                {{ number_format($carRental->rental_car_price + $carRental->rental_driver_price, 0, ',', '.') }}
                                                /
                                                {{ $carRental->rental_time }}
                                            </p>
                                        @endforeach
                                        <hr>
                                        <a class="ad-btn"
                                            href="https://wa.me/{{ $custom->no_tlpn_first_space }}?text={{ urlencode('Halo Kenangan RentCar, Saya ingin memesan jenis mobil ' . $car->car_type . ' ini, apakah bisa?') }}">
                                            <i class="bi bi-whatsapp me-2"></i> Pesan Sekarang
                                        </a>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Features 2 Section -->
        <section id="services" class="services section light-background">


            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Mengapa harus Kenangan Rentcar ?</h2>
                <p>Kenangan Rentcar menawarkan solusi rental mobil yang terpercaya dengan layanan terbaik untuk kebutuhan transportasi Anda.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div>
                                <h3>Pelayanan Profesional</h3>
                                <p>Kami selalu mengutamakan kepuasan pelanggan dengan pelayanan yang ramah dan
                                    responsif.</p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-car-front-fill"></i>
                            </div>
                            <div>
                                <h3>Armada Terbaik</h3>
                                <p>Pilihan mobil berkualitas yang terawat untuk menjamin kenyamanan dan keamanan
                                    perjalanan Anda.</p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-coin"></i>
                            </div>
                            <div>
                                <h3>Harga Kompetitif</h3>
                                <p>Layanan premium dengan harga yang bersahabat sesuai dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-bag-check-fill"></i>
                            </div>
                            <div>
                                <h3>Kemudahan Pemesanan</h3>
                                <p>Proses booking yang cepat dan praktis, langsung melalui WhatsApp.</p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-person-hearts"></i>
                            </div>
                            <div>
                                <h3>Kepercayaan Pelanggan</h3>
                                <p>Ribuan pelanggan puas telah mempercayakan perjalanan mereka bersama kami.</p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div>
                                <h3>Dukungan 24/7</h3>
                                <p>Tim kami siap membantu Anda kapan saja, baik untuk pemesanan, pertanyaan, atau
                                    kebutuhan darurat di perjalanan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-alarm-fill"></i>
                            </div>
                            <div>
                                <h3>Fleksibilitas Waktu</h3>
                                <p>Layanan rental tersedia dengan opsi harian, mingguan, hingga bulanan sesuai keperluan
                                    Anda.</p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-arrow-down-up"></i>
                            </div>
                            <div>
                                <h3>Layanan Antar-Jemput</h3>
                                <p>Nikmati kenyamanan ekstra dengan layanan antar-jemput mobil langsung ke lokasi Anda.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                </div>

            </div>

        </section><!-- /Features 2 Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Visitor</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->
        <!-- Faq Section -->
        <section class="faq-9 faq section light-background" id="faq">

            <div class="container">
                <div class="row">

                    <div class="col-lg-5" data-aos="fade-up">
                        <h2 class="faq-title">Punya pertanyaan? Lihat FAQ</h2>
                        <p class="faq-description">Pertanyaan-pertanyaan berikut mungkin bisa menjawab pertanyaan anda.</p>
                        <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                            <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Bagaimana cara memesan mobil melalui Kenangan RentCar?</h3>
                                <div class="faq-content">
                                    <p>Pemesanan dapat dilakukan melalui WhatsApp dengan mengklik tombol yang tersedia di landing page kami.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apa saja dokumen yang diperlukan untuk menyewa mobil?</h3>
                                <div class="faq-content">
                                    <p>Anda perlu menyertakan fotokopi KTP, SIM A, dan dokumen tambahan sesuai ketentuan.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah saya bisa membatalkan atau mengubah jadwal pemesanan?</h3>
                                <div class="faq-content">
                                    <p>Ya, pembatalan atau perubahan jadwal dapat dilakukan dengan menghubungi kami melalui WhatsApp setidaknya 24 jam sebelum waktu sewa.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah ada batasan jarak tempuh untuk penyewaan mobil?</h3>
                                <div class="faq-content">
                                    <p>Tidak ada batasan jarak tempuh, namun penyewa bertanggung jawab atas biaya bahan bakar selama penyewaan.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah tersedia layanan antar-jemput mobil?</h3>
                                <div class="faq-content">
                                    <p>Ya, kami menyediakan layanan antar-jemput tanpa biaya jika jarak tidak melebihi 2 km. Untuk jarak lebih dari 2 km, biaya tambahan akan dikenakan sesuai lokasi Anda.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apa saja metode pembayaran yang diterima?</h3>
                                <div class="faq-content">
                                    <p>Kami menerima pembayaran melalui transfer bank, e-wallet, atau tunai saat serah terima mobil.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau ingin melakukan reservasi, jangan ragu untuk menghubungi kami melalui kontak yang tertera.
                </p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">
                    <div class="col-lg-4">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Informasi Kontak</h3>
                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Lokasi Kami</h4>
                                    <p>Perumahan Mayang Pratama No.14 blok H3, Mustikasari, Mustika Jaya, Bekasi, Jawa
                                        Barat.</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Nomor Handphone</h4>
                                    <p>{{ $custom->no_tlpn_first }}</p>
                                    <p>{{ $custom->no_tlpn_second }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="faq-container">
                            <iframe
                                class="responsive-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31717.492407357116!2d107.0068641!3d-6.2871856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f945244a1a9%3A0x99312cede7524996!2sSewa%20Rental%20Mobil%20Bekasi%20(Kenangan%20Rent%20Car)!5e0!3m2!1sen!2sid!4v1697101234567!5m2!1sen!2sid"
                                allowfullscreen="" loading="lazy" data-aos="fade-up" data-aos-delay="300">
                            </iframe>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-10 col-md-6 footer-about">
                    <a href="#hero" class="logo d-flex align-items-center">
                        <img src="{{ asset('storage/' . $custom->logo) }}" alt="logo" class="sitename">
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Perumahan Mayang Pratama No.14 blok H3, Mustikasari, Mustika Jaya, Bekasi, Jawa Barat.</p>
                        <p></p>
                        <p class="mt-3"><strong>No Handphone 1:</strong> <span>{{ $custom->no_tlpn_first }}</span></p>
                        <p><strong>No Handphone 2:</strong> <span>{{ $custom->no_tlpn_second }}</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://wa.me/{{ $custom->no_tlpn_first_space }}?text={{ urlencode('Halo Kenangan RentCar, Saya ingin menyewa mobil, apa saja mobil yang tersedia?') }}"><i class="bi bi-whatsapp"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Mobil</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>

                

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Kenangan Rentcar</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // Menampilkan modal saat halaman dimuat
        $(document).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>
