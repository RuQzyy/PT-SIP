<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Begin Head -->

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Megakit - HTML5 Theme</title>

    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="Megakit - HTML5 Theme">
    <meta name="author" content="keenthemes.com">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- ================= Vendor CSS ================= -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/themify/themify.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/scrollbar/scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet">

    <!-- ================= Theme CSS ================= -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global/global.css') }}" rel="stylesheet">

    <!-- ================= Leaflet CSS ================= -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- ================= Custom Override CSS ================= -->
    <link href="{{ asset('css/custom-header.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio-responsive.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
</head>


<!-- End Head -->

<!-- Body -->

<body>

    <!--========== HEADER ==========-->
    <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
        <!-- Navbar -->
        <div class="s-header__navbar">
            <div class="s-header__container">
                <div class="s-header__navbar-row">
                    <div class="s-header__navbar-row-col">

                        <!-- Logo -->
                        <div class="s-header__logo">
                            <a href="#home" class="s-header__logo-link">
                                <span class="logo-text">
                                    <span class="logo-pt">PT</span>
                                    <span class="logo-sip"> SIP</span>
                                </span>
                            </a>
                        </div>

                        <!-- End Logo -->

                    </div>

                    <div class="s-header__navbar-row-col">
                        <!-- Trigger -->
                        <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                            <span class="s-header__trigger-icon"></span>
                            <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewBox="0 0 54 54">
                                <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27"
                                    r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                            </svg>
                        </a>
                        <!-- End Trigger -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End Navbar -->
    </header>
    <!--========== END HEADER ==========-->


    <!-- Overlay -->
    <div class="s-header-bg-overlay js__bg-overlay">
        <!-- Nav -->
        <nav class="s-header__nav js__scrollbar">
            <div class="container-fluid">
                <!-- Menu List -->
                <ul class="list-unstyled s-header__nav-menu">
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active"
                            href="index.html">Corporate</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="index_app_landing.html">App Landing</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="index_portfolio.html">Portfolio</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="index_events.html">Events</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="index_lawyer.html">Lawyer</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="index_clinic.html">Clinic</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="index_coming_soon.html">Coming Soon</a></li>
                </ul>
                <!-- End Menu List -->

                <!-- Menu List -->
                <ul class="list-unstyled s-header__nav-menu">
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="about.html">About</a>
                    </li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="team.html">Team</a>
                    </li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="services.html">Services</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="events.html">Events</a></li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="faq.html">FAQ</a>
                    </li>
                    <li class="s-header__nav-menu-item"><a
                            class="s-header__nav-menu-link s-header__nav-menu-link-divider"
                            href="contacts.html">Contacts</a></li>
                </ul>
                <!-- End Menu List -->
            </div>
        </nav>
        <!-- End Nav -->

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--lb">
            <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a>
            </li>
            <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
        </ul>
        <!-- End Action -->

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--rb">
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-facebook"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-twitter"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-instagram"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                </a>
            </li>
        </ul>
        <!-- End Action -->
    </div>
    <!-- End Overlay -->
    </header>
    <!--========== END HEADER ==========-->

    <!--========== SWIPER SLIDER ==========-->
    <div class="s-swiper js__swiper-one-item" id="home">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">

            <!-- ===== Slide 1 : Company Identity ===== -->
            <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                style="background: url('img/1920x1080/02.jpg');">
                <div class="container g-text-center--xs g-ver-center--xs">
                    <div class="g-margin-b-30--xs">
                        <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">
                            Solusi Konstruksi Elektrikal<br>
                            Profesional dan Terpercaya
                        </h1>
                    </div>
                </div>
            </div>

            <!-- ===== Slide 2 : Value & Services ===== -->
            <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                style="background: url('img/1920x1080/01.jpg');">
                <div class="container g-text-center--xs g-ver-center--xs">
                    <div class="g-margin-b-30--xs">
                        <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">
                            Mitra Andal dalam<br>
                            Instalasi dan Konstruksi Elektrikal<br>
                            yang Aman dan Berkualitas
                        </h2>
                    </div>
                    {{-- <a class="js__popup__youtube"
                   href="https://www.youtube.com/watch?v=lcFYdgZKZxY"
                   title="Intro Video">
                    <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                </a>  --}}
                </div>
            </div>

            <!-- ===== Slide 3 : Vision ===== -->
            <div class="g-fullheight--xs g-bg-position--center swiper-slide"
                style="background: url('img/1920x1080/03.jpg');">
                <div class="container g-text-center--xs g-ver-center--xs">
                    <div class="g-margin-b-30--xs">
                        <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">
                            Menjadi Perusahaan<br>
                            Konstruksi Elektrikal<br>
                            yang Unggul dan Terpercaya
                        </h2>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Swiper Wrapper -->

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!--========== END SWIPER SLIDER ==========-->


    <!-- Arrows -->
    <a href="javascript:void(0);"
        class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);"
        class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->

    <a href="#about" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
        <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
        <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Lihat Lebih Lanjut</p>
    </a>
    </div>
    <!--========== END SWIPER SLIDER ==========-->

    <!--========== COMPANY OVERVIEW ==========-->
    <div id="about" class="container g-padding-y-80--xs g-padding-y-125--sm">

        <!-- Heading -->
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p
                class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-20--xs">
                Tentang Perusahaan
            </p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">
                PT. Seram Indo Pratama
            </h2>
            <p class="g-font-size-18--xs g-color--text g-margin-t-20--xs">
                Perusahaan yang bergerak di bidang konstruksi dan instalasi elektrikal
                dengan komitmen terhadap kualitas, keselamatan, dan ketepatan waktu.
            </p>
        </div>

        <!-- Core Services -->
        <div class="row g-margin-b-60--xs g-margin-b-70--md">

            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                <div class="clearfix">
                    <div class="g-media g-width-30--xs">
                        <i class="g-font-size-28--xs g-color--primary ti-bolt"></i>
                    </div>
                    <div class="g-media__body g-padding-x-20--xs">
                        <h3 class="g-font-size-18--xs">Instalasi Elektrikal</h3>
                        <p class="g-margin-b-0--xs">
                            Pekerjaan instalasi listrik tegangan rendah dan menengah
                            untuk bangunan, industri, dan fasilitas umum.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                <div class="clearfix">
                    <div class="g-media g-width-30--xs">
                        <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                    </div>
                    <div class="g-media__body g-padding-x-20--xs">
                        <h3 class="g-font-size-18--xs">Konstruksi & Maintenance</h3>
                        <p class="g-margin-b-0--xs">
                            Pelaksanaan konstruksi serta pemeliharaan sistem
                            elektrikal secara profesional dan berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="clearfix">
                    <div class="g-media g-width-30--xs">
                        <i class="g-font-size-28--xs g-color--primary ti-shield"></i>
                    </div>
                    <div class="g-media__body g-padding-x-20--xs">
                        <h3 class="g-font-size-18--xs">Keselamatan & Kualitas</h3>
                        <p class="g-margin-b-0--xs">
                            Mengutamakan standar keselamatan kerja serta kualitas
                            hasil sesuai regulasi dan kebutuhan klien.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--========== END COMPANY OVERVIEW ==========-->


    <!-- Parallax -->
    <div class="js__parallax-window"
        style="background: url({{ asset('img/1920x1080/03.jpg') }}) 50% 0 no-repeat fixed;">
        <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-margin-b-40--xs">
                <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">
                    Visi & Misi Perusahaan
                </h2>
            </div>
            <p class="g-font-size-18--xs g-color--white g-margin-b-40--xs">
                Arah dan komitmen kami dalam memberikan layanan terbaik secara profesional
            </p>
            <a href="#visi-misi" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">
                Lihat Selengkapnya
            </a>
        </div>
    </div>
    <!-- End Parallax -->


    <!--========== VISI & MISI ==========-->
    <div class="g-promo-section"id="visi-misi">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row">

                <!-- Left Title -->
                <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                    <p
                        class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                        Visi & Misi
                    </p>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Arah</h2>
                    </div>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Perusahaan</h2>
                    </div>
                </div>

                <!-- Vision & Mission Content -->
                <div class="col-md-4 col-md-offset-1">

                    <!-- Vision -->
                    <h3 class="g-font-size-22--xs g-margin-b-15--xs">Visi</h3>
                    <p class="g-font-size-18--xs g-margin-b-30--xs">
                        Menjadi perusahaan yang unggul dalam memberikan layanan terkemuka terdepan.
                    </p>

                    <!-- Mission -->
                    <h3 class="g-font-size-22--xs g-margin-b-15--xs">Misi</h3>
                    <ul class="g-font-size-18--xs g-color--text">
                        <li>Memberikan pelayanan yang terbaik secara profesional.</li>
                        <li>Meningkatkan sumber daya manusia berkompeten.</li>
                        <li>Meningkatkan keselamatan, kesehatan kerja dan lindungan lingkungan kerja setiap karyawan.
                        </li>
                        <li>Memberikan layanan terbaik dan keuntungan bagi klien dan mitra kerja.</li>
                    </ul>


                </div>
            </div>
        </div>

        <!-- Right Image -->
        <div
            class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
            <img class="img-responsive" src="img/970x970/03.jpg" alt="Visi dan Misi Perusahaan">
        </div>
    </div>
    <!--========== END VISI & MISI ==========-->


    <!-- Contact Call To Action -->
    <div class="js__parallax-window"
        style="background: url({{ asset('img/1920x1080/07.jpg') }}) 50% 0 no-repeat fixed;">
        <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-margin-b-50--xs">
                <p
                    class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                    Hubungi Kami
                </p>
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">
                    Siap Menjadi Mitra Proyek Anda
                </h2>
                <p class="g-font-size-18--xs g-color--white g-margin-t-20--xs">
                    Konsultasikan kebutuhan konstruksi dan instalasi elektrikal Anda bersama kami
                </p>
            </div>

            <a href="#contact" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">
                Hubungi Sekarang
            </a>
        </div>
    </div>
    <!-- End Contact Call To Action -->


    <!--========== GALERI PROYEK ==========-->
    <div class="container g-padding-y-80--xs" id="projects">

        <!-- Heading -->
        <div class="g-text-center--xs g-margin-b-40--xs">
            <p
                class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs">
                Portofolio
            </p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">
                Galeri Proyek
            </h2>
            <p class="g-font-size-18--xs g-color--text g-margin-t-15--xs">
                Dokumentasi proyek dan pekerjaan yang telah diselesaikan oleh PT. Seram Indo Pratama
            </p>
        </div>

        <!-- Filter -->
        <div class="s-portfolio">
            <div id="js__filters-portfolio-gallery"
                class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">

                <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">
                    Semua Proyek
                </div>
                <div data-filter=".elektrikal" class="s-portfolio__filter-v1-item cbp-filter-item">
                    Instalasi Elektrikal
                </div>
                <div data-filter=".konstruksi" class="s-portfolio__filter-v1-item cbp-filter-item">
                    Konstruksi
                </div>
                <div data-filter=".maintenance" class="s-portfolio__filter-v1-item cbp-filter-item">
                    Maintenance
                </div>

            </div>
        </div>
    </div>
    <!--========== END FILTER ==========-->

    <!--========== PORTFOLIO GALLERY ==========-->
    <div class="container g-margin-b-100--xs">
        <div id="js__grid-portfolio-gallery" class="cbp">

            <!-- Item 1 -->
            <div class="s-portfolio__item cbp-item elektrikal">
                <div class="s-portfolio__img-effect">
                    <img src="img/970x647/05.jpg" alt="Instalasi Elektrikal">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">
                            Instalasi Panel Listrik
                        </h4>
                        <p class="g-color--white-opacity">
                            Proyek Gedung Perkantoran
                        </p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="img/970x647/05.jpg"
                                class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle"
                                data-title="Instalasi Panel Listrik <br/> PT. Seram Indo Pratama">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="s-portfolio__item cbp-item konstruksi">
                <div class="s-portfolio__img-effect">
                    <img src="img/970x647/06.jpg" alt="Konstruksi">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">
                            Pekerjaan Konstruksi
                        </h4>
                        <p class="g-color--white-opacity">
                            Pembangunan Fasilitas Umum
                        </p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="img/970x647/06.jpg"
                                class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle"
                                data-title="Pekerjaan Konstruksi <br/> PT. Seram Indo Pratama">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="s-portfolio__item cbp-item maintenance">
                <div class="s-portfolio__img-effect">
                    <img src="img/970x647/07.jpg" alt="Maintenance">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">
                            Maintenance Sistem Listrik
                        </h4>
                        <p class="g-color--white-opacity">
                            Perawatan Berkala
                        </p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="img/970x647/07.jpg"
                                class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle"
                                data-title="Maintenance Sistem Listrik <br/> PT. Seram Indo Pratama">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="s-portfolio__item cbp-item elektrikal maintenance">
                <div class="s-portfolio__img-effect">
                    <img src="img/970x647/08.jpg" alt="Instalasi dan Maintenance">
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">
                            Instalasi & Perawatan
                        </h4>
                        <p class="g-color--white-opacity">
                            Sistem Kelistrikan Bangunan
                        </p>
                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="img/970x647/08.jpg"
                                class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle"
                                data-title="Instalasi & Perawatan <br/> PT. Seram Indo Pratama">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!--========== END GALERI PROYEK ==========-->


    {{-- <!-- Testimonials -->
    <div class="js__parallax-window" style="background: url(img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
        <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <p
                class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">
                Testimonials</p>
            <div class="s-swiper js__swiper-testimonials">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper g-margin-b-50--xs">
                    <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                        <div class="g-padding-x-20--xs g-padding-x-50--lg">
                            <div class="g-margin-b-40--xs">
                                <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased
                                        many great templates over the years but this product and this company have taken
                                        it to the next level. Exceptional customizability. "</i></p>
                            </div>
                            <div
                                class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs">
                            </div>
                            <h4
                                class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">
                                Jake Richardson / Google</h4>
                        </div>
                    </div>
                    <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                        <div class="g-padding-x-20--xs g-padding-x-50--lg">
                            <div class="g-margin-b-40--xs">
                                <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased
                                        many great templates over the years but this product and this company have taken
                                        it to the next level. Exceptional customizability. "</i></p>
                            </div>
                            <div
                                class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs">
                            </div>
                            <h4
                                class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">
                                Jake Richardson / Google</h4>
                        </div>
                    </div>
                    <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                        <div class="g-padding-x-20--xs g-padding-x-50--lg">
                            <div class="g-margin-b-40--xs">
                                <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased
                                        many great templates over the years but this product and this company have taken
                                        it to the next level. Exceptional customizability. "</i></p>
                            </div>
                            <div
                                class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs">
                            </div>
                            <h4
                                class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">
                                Jake Richardson / Google</h4>
                        </div>
                    </div>
                </div>
                <!-- End Swipper Wrapper -->

                <!-- Arrows -->
                <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                <a href="javascript:void(0);"
                    class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                <a href="javascript:void(0);"
                    class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                <!-- End Arrows -->
            </div>
        </div>
    </div>
    <!-- End Testimonials --> --}}

    <!-- Clients -->
    <div class="g-bg-color--sky-light">
        <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <!-- Swiper Clients -->
            <div class="s-swiper js__swiper-clients">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="s-clients-v1" src="img/clients/01-dark.png" alt="Clients Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                            <img class="s-clients-v1" src="img/clients/02-dark.png" alt="Clients Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                            <img class="s-clients-v1" src="img/clients/03-dark.png" alt="Clients Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                            <img class="s-clients-v1" src="img/clients/04-dark.png" alt="Clients Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                            <img class="s-clients-v1" src="img/clients/05-dark.png" alt="Clients Logo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Clients -->
        </div>
    </div>
    <!-- End Clients -->

    <!--========== KEGIATAN & UPDATE PROYEK ==========-->
    <div class="container g-padding-y-80--xs g-padding-y-125--sm" id="activity">

        <!-- Heading -->
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p
                class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                Informasi
            </p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">
                Kegiatan & Update Proyek
            </h2>
            <p class="g-font-size-18--xs g-color--text g-margin-t-15--xs">
                Dokumentasi kegiatan dan progres pekerjaan PT. Seram Indo Pratama
            </p>
        </div>

        <div class="row">

            <!-- Item 1 -->
            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                <article>
                    <img class="img-responsive" src="img/970x970/01.jpg" alt="Instalasi Elektrikal">
                    <div
                        class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p
                            class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                            Proyek
                        </p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1">
                            Instalasi Sistem Kelistrikan
                        </h3>
                        <p>
                            Pelaksanaan pekerjaan instalasi listrik pada bangunan sesuai standar keselamatan dan
                            kualitas.
                        </p>
                    </div>
                </article>
            </div>

            <!-- Item 2 -->
            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                <article>
                    <img class="img-responsive" src="img/970x970/02.jpg" alt="Keselamatan Kerja">
                    <div
                        class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p
                            class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                            K3
                        </p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1">
                            Penerapan Keselamatan Kerja
                        </h3>
                        <p>
                            Komitmen perusahaan dalam menerapkan keselamatan, kesehatan kerja, dan perlindungan
                            lingkungan.
                        </p>
                    </div>
                </article>
            </div>

            <!-- Item 3 -->
            <div class="col-sm-4">
                <article>
                    <img class="img-responsive" src="img/970x970/03.jpg" alt="Progress Proyek">
                    <div
                        class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                        <p
                            class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                            Progress
                        </p>
                        <h3 class="g-font-size-22--xs g-letter-spacing--1">
                            Monitoring Proyek Lapangan
                        </h3>
                        <p>
                            Evaluasi dan dokumentasi perkembangan pekerjaan proyek secara berkala.
                        </p>
                    </div>
                </article>
            </div>

        </div>
    </div>
    <!--========== END KEGIATAN & UPDATE PROYEK ==========-->


    <!--========== STATISTIK PERUSAHAAN ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row">

                <!-- Counter 1 -->
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                    <div class="g-text-center--xs">
                        <figure
                            class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">
                            25
                        </figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">
                            Proyek Selesai
                        </h4>
                    </div>
                </div>

                <!-- Counter 2 -->
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                    <div class="g-text-center--xs">
                        <figure
                            class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">
                            20
                        </figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">
                            Klien
                        </h4>
                    </div>
                </div>

                <!-- Counter 3 -->
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <figure
                            class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">
                            15
                        </figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">
                            Tenaga Profesional
                        </h4>
                    </div>
                </div>

                <!-- Counter 4 -->
                <div class="col-md-3 col-xs-6 g-full-width--xs">
                    <div class="g-text-center--xs">
                        <figure
                            class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">
                            5
                        </figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">
                            Tahun Pengalaman
                        </h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--========== END STATISTIK PERUSAHAAN ==========-->


    <!--========== CONTACT / HUBUNGI KAMI ==========-->
    <div class="g-bg-color--sky-light" id="contact">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">

            <!-- Heading -->
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p
                    class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                    Hubungi Kami
                </p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">
                    Konsultasi & Informasi Layanan
                </h2>
                <p class="g-font-size-18--xs g-color--text g-margin-t-20--xs">
                    Silakan hubungi kami untuk kebutuhan konstruksi dan instalasi elektrikal Anda.
                </p>
            </div>

            <!-- Contact Form -->
            <form>
                <div class="row g-margin-b-40--xs">

                    <!-- Left -->
                    <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                        <div class="g-margin-b-20--xs">
                            <input type="text" class="form-control s-form-v2__input g-radius--50"
                                placeholder="Nama Lengkap *" required>
                        </div>

                        <div class="g-margin-b-20--xs">
                            <input type="email" class="form-control s-form-v2__input g-radius--50"
                                placeholder="Email *" required>
                        </div>

                        <input type="text" class="form-control s-form-v2__input g-radius--50"
                            placeholder="No. Telepon *" required>
                    </div>

                    <!-- Right -->
                    <div class="col-sm-6">
                        <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8"
                            placeholder="Pesan / Kebutuhan Anda *" required></textarea>
                    </div>

                </div>

                <!-- Button -->
                <div class="g-text-center--xs">
                    <button type="submit"
                        class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">
                        Hubungi Sekarang
                    </button>
                </div>
            </form>

        </div>
    </div>
    <!--========== END CONTACT ==========-->


    <!-- Leaflet Map -->
    <section class="s-google-map">
        <div id="leaflet-map" class="s-google-container g-height-400--xs"></div>
    </section>
    <!-- End Leaflet Map -->

    <!--========== END PAGE CONTENT ==========-->

   <!--========== FOOTER ==========-->
<footer class="g-bg-color--dark">
    <!-- Links -->
    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">

                <!-- Navigasi -->
                <div class="col-sm-3 col-xs-12 g-margin-b-30--xs">
                    <h4 class="g-font-size-16--xs g-color--white g-margin-b-20--xs">
                        Navigasi
                    </h4>
                    <ul class="list-unstyled g-ul-li-tb-5--xs">
                        <li><a href="#home" class="g-color--white-opacity">Home</a></li>
                        <li><a href="#about" class="g-color--white-opacity">Tentang Kami</a></li>
                        <li><a href="#projects" class="g-color--white-opacity">Proyek</a></li>
                        <li><a href="#contact" class="g-color--white-opacity">Kontak</a></li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div class="col-sm-3 col-xs-12 g-margin-b-30--xs">
                    <h4 class="g-font-size-16--xs g-color--white g-margin-b-20--xs">
                        Layanan
                    </h4>
                    <ul class="list-unstyled g-ul-li-tb-5--xs">
                        <li class="g-color--white-opacity">Instalasi Elektrikal</li>
                        <li class="g-color--white-opacity">Konstruksi</li>
                        <li class="g-color--white-opacity">Maintenance</li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="col-sm-3 col-xs-12 g-margin-b-30--xs">
                    <h4 class="g-font-size-16--xs g-color--white g-margin-b-20--xs">
                        Kontak
                    </h4>
                    <ul class="list-unstyled g-ul-li-tb-5--xs">
                        <li class="g-color--white-opacity">
                            Ambon, Maluku
                        </li>
                        <li class="g-color--white-opacity">
                            info@ptseramindopratama.co.id
                        </li>
                        <li class="g-color--white-opacity">
                            +62 xxx xxxx xxxx
                        </li>
                    </ul>
                </div>

                <!-- Profil Perusahaan -->
                <div class="col-sm-3 col-xs-12">
                    <h4 class="g-font-size-16--xs g-color--white g-margin-b-20--xs">
                        PT. Seram Indo Pratama
                    </h4>
                    <p class="g-color--white-opacity g-font-size-14--xs">
                        Perusahaan yang bergerak di bidang konstruksi dan instalasi elektrikal
                        dengan komitmen pada kualitas, keselamatan, dan ketepatan waktu.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="container g-padding-y-30--xs">
        <div class="row g-text-center--xs">

            <div class="col-xs-12">
                <p class="g-font-size-14--xs g-color--white-opacity-light g-margin-b-0--xs">
                    © 2025 PT. Seram Indo Pratama. All rights reserved.
                </p>
            </div>

        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->


    <!-- Back To Top -->
    <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

    <!--========== JAVASCRIPTS (Load at bottom) ==========-->

    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.migrate.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.back-to-top.min.js') }}"></script>
    <script src="{{ asset('vendor/scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper.jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.parallax.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.wow.min.js') }}"></script>

    <!-- Leaflet JS (MAP GRATIS) -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Theme Core -->
    <script src="{{ asset('js/global.min.js') }}"></script>
    <script src="{{ asset('js/components/header-sticky.min.js') }}"></script>
    <script src="{{ asset('js/components/scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/components/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/components/swiper.min.js') }}"></script>
    <script src="{{ asset('js/components/counter.min.js') }}"></script>
    <script src="{{ asset('js/components/portfolio-3-col.min.js') }}"></script>
    <script src="{{ asset('js/components/parallax.min.js') }}"></script>
    <script src="{{ asset('js/components/wow.min.js') }}"></script>

    <!-- Smooth Scroll untuk semua anchor -->
    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(e) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    e.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 800, 'swing');
                }
            });
        });
    </script>

    <!-- Leaflet Map Init -->
    <script>
        const map = L.map('leaflet-map', {
            scrollWheelZoom: false
        }).setView([-6.200000, 106.816666], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        L.marker([-6.200000, 106.816666])
            .addTo(map)
            .bindPopup('<b>PT SIP</b><br>Kantor Pusat');

        map.on('click', function() {
            map.scrollWheelZoom.enable();
        });

        map.on('mouseout', function() {
            map.scrollWheelZoom.disable();
        });
    </script>


    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->

</html>
