<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>GoMinGo</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.0-beta1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lindy-uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">

        <!-- ========================= header-6 start ========================= -->
        <header class="header header-6">
            <div class="navbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="index.html">
                                    <img src="{{ asset('assets/img/logo/logogo.png') }}" alt="Logo" width="100"
                                        height="100" />
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                                    <ul id="nav6" class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{ url('/home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#event">Event</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start ========================= -->
    <!-- ========================= pricing style-4 end ========================= -->
    <section id="event" class="katalog-event-section pt-100 pb-100">
        <div class="container">

            <!-- Filter Tombol -->
            <div class="section-title text-center mb-40">
                <h2>Temukan Event Menarik</h2>
                <p>Event menarik akan segera hadir.</p>
            </div>

            <!-- Kolom Pencarian -->
            <div class="text-center mb-4">
                <div class="d-flex justify-content-center">
                    <div class="position-relative w-75"> <!-- Lebar 75% dari container -->
                        <input type="text" id="searchGuide"
                            class="form-control rounded-pill ps-4 pe-5 py-3 fs-5 shadow-sm" placeholder="Cari Event...">
                        <button type="button"
                            class="btn position-absolute top-50 end-0 translate-middle-y me-2 text-primary"
                            style="background: none; border: none;">
                            <i class="bi bi-search fs-3"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tombol Kategori -->
            <div class="text-center mb-50">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="alam">Event Alam</button>
                <button class="filter-btn" data-filter="kuliner">Event Kuliner</button>
                <button class="filter-btn" data-filter="budaya">Event Budaya</button>
            </div>

            <!-- Kartu event -->
            <div class="row justify-content-center" id="event-list">

                <!-- Event Alam -->
                <div class="col-lg-3 col-md-6 col-sm-12 event-item" data-category="alam">
                    <div class="single-pricing-wrapper">
                        <div class="single-pricing text-center p-3 shadow-sm">
                            <div class="img-wrapper mb-3">
                                <img src="{{ asset('assets/img/event/foto1.jpeg') }}" alt="Pantai Padang"
                                    class="img-fluid rounded"
                                    style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px;">
                            </div>
                            <h4 class="fw-bold mb-2">Baralek Gadang</h4>
                            <p class="text-muted mb-3">Event budaya yang menampilkan tradisi Minangkabau.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#detailevent" data-bs-toggle="modal"
                                    class="button radius-30 px-3 py-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Kuliner -->
                <div class="col-lg-3 col-md-6 col-sm-12 event-item" data-category="kuliner">
                    <div class="single-pricing-wrapper">
                        <div class="single-pricing text-center p-3 shadow-sm">
                            <div class="img-wrapper mb-3">
                                <img src="{{ asset('assets/img/event/foto1.jpeg') }}" alt="Rendang Padang"
                                    class="img-fluid rounded"
                                    style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px;">
                            </div>
                            <h4 class="fw-bold mb-2">Festival Kuliner</h4>
                            <p class="text-muted mb-3">Event kuliner khas Minangkabau yang memanjakan lidah.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#detailevent" data-bs-toggle="modal"
                                    class="button radius-30 px-3 py-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Budaya -->
                <div class="col-lg-3 col-md-6 col-sm-12 event-item" data-category="budaya">
                    <div class="single-pricing-wrapper">
                        <div class="single-pricing text-center p-3 shadow-sm">
                            <div class="img-wrapper mb-3">
                                <img src="{{ asset('assets/img/event/foto1.jpeg') }}" alt="Jam Gadang"
                                    class="img-fluid rounded"
                                    style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px;">
                            </div>
                            <h4 class="fw-bold mb-2">Festival Budaya</h4>
                            <p class="text-muted mb-3">Menampilkan seni dan tarian tradisional Minangkabau.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#detailevent" data-bs-toggle="modal"
                                    class="button radius-30 px-3 py-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Alam 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12 event-item" data-category="alam">
                    <div class="single-pricing-wrapper">
                        <div class="single-pricing text-center p-3 shadow-sm">
                            <div class="img-wrapper mb-3">
                                <img src="{{ asset('assets/img/event/foto1.jpeg') }}" alt="Danau Maninjau"
                                    class="img-fluid rounded"
                                    style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px;">
                            </div>
                            <h4 class="fw-bold mb-2">Event Alam</h4>
                            <p class="text-muted mb-3">Menikmati keindahan Danau Maninjau dan pesona alamnya.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#detailevent" data-bs-toggle="modal"
                                    class="button radius-30 px-3 py-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal Detail Tempat event -->
        <form action="#" method="post">
            <div class="modal fade" id="detailevent" tabindex="-1" aria-labelledby="detaileventLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row align-items-center">
                                <!-- Foto Tempat event -->
                                <div class="col-md-4 text-center">
                                    <img src="" alt="Foto event"
                                        class="img-fluid rounded shadow-sm modal-image"
                                        style="width: 100%; max-height: 300px; object-fit: cover;">
                                </div>

                                <!-- Detail Informasi -->
                                <div class="col-md-8">
                                    <h5 class="mb-3 text-primary">Detail Tempat event</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="namaevent" class="form-label">Nama Event</label>
                                            <input type="text" id="namaevent" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lokasi" class="form-label">Lokasi</label>
                                            <input type="text" id="lokasi" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <textarea id="deskripsi" class="form-control" rows="3" readonly></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="text" id="tanggal" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="harga" class="form-label">Harga Tiket</label>
                                            <input type="text" id="harga" class="form-control" readonly>
                                        </div>
                                        <!-- Tour Guide yang Terdaftar -->
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label fw-bold">Tour Guide yang Terdaftar</label>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped align-middle">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Tour Guide</th>
                                                            <th>Pengalaman</th>
                                                            <th>Kontak</th>
                                                            <th>Rating</th>
                                                            <th>Hubungi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Data diisi via JavaScript -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Modal -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            // === DATA event ===


            // === FILTER KATEGORI ===
            const filterButtons = document.querySelectorAll(".filter-btn");
            const eventItems = document.querySelectorAll(".event-item");

            filterButtons.forEach(btn => {
                btn.addEventListener("click", function() {
                    const filter = this.getAttribute("data-filter");

                    filterButtons.forEach(b => b.classList.remove("active"));
                    this.classList.add("active");

                    eventItems.forEach(item => {
                        if (filter === "all" || item.dataset.category === filter) {
                            item.style.display = "block";
                            item.classList.add("animate__fadeIn");
                        } else {
                            item.style.display = "none";
                        }
                    });
                });
            });
        </script>

    </section>


    <!-- ========================= footer style-4 start ========================= -->
    <footer class="footer footer-style-4">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
                            <div class="logo">
                                <a href="#0"> <img src="{{ asset('assets/img/logo/logogo.png') }}"
                                        width="100" height="100" alt="">
                                </a>
                            </div>
                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis nulla
                                placerat amet amet congue.</p>
                            <ul class="socials">
                                <li> <a href="#0"> <i class="lni lni-facebook-filled"></i> </a> </li>
                                <li> <a href="#0"> <i class="lni lni-twitter-filled"></i> </a> </li>
                                <li> <a href="#0"> <i class="lni lni-instagram-filled"></i> </a> </li>
                                <li> <a href="#0"> <i class="lni lni-linkedin-original"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".3s">
                            <h6>Quick Link</h6>
                            <ul class="links">
                                <li> <a href="#0">Home</a> </li>
                                <li> <a href="#0">About</a> </li>
                                <li> <a href="#0">Service</a> </li>
                                <li> <a href="#0">Testimonial</a> </li>
                                <li> <a href="#0">Contact</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
                            <h6>Services</h6>
                            <ul class="links">
                                <li> <a href="#0">Web Design</a> </li>
                                <li> <a href="#0">Web Development</a> </li>
                                <li> <a href="#0">Seo Optimization</a> </li>
                                <li> <a href="#0">Blog Writing</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".5s">
                            <h6>Download App</h6>
                            <ul class="download-app">
                                <li>
                                    <a href="#0">
                                        <span class="icon"><i class="lni lni-apple"></i></span>
                                        <span class="text">Download on the <b>App Store</b> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span class="icon"><i class="lni lni-play-store"></i></span>
                                        <span class="text">GET IT ON <b>Play Store</b> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========================= footer style-4 end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->


    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/js/bootstrap-5.0.0-beta1.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
