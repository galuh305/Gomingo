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
                                            <a class="page-scroll" href="#tourguide">tourguide</a>
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
    <section id="tourguide" class="katalog-tourguide-section pt-100 pb-100">
        <div class="container">
            <!-- Judul dan Deskripsi -->
            <div class="section-title text-center mb-40">
                <h2>Tour Guide Berpengalaman</h2>
                <p>Tour Guide sudah terverifikasi dan siap menemani perjalanan Anda.</p>
            </div>

            <!-- Kolom Pencarian -->
            <div class="text-center mb-4">
                <div class="d-flex justify-content-center">
                    <div class="position-relative w-75">
                        <input type="text" id="searchGuide"
                            class="form-control rounded-pill ps-4 pe-5 py-3 fs-5 shadow-sm"
                            placeholder="Cari tour guide...">
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
                <button class="filter-btn" data-filter="alam">Tour Guide Alam</button>
                <button class="filter-btn" data-filter="kuliner">Tour Guide Kuliner</button>
                <button class="filter-btn" data-filter="budaya">Tour Guide Budaya</button>
            </div>

            <!-- Kartu tourguide -->
            <div class="row justify-content-center" id="tourguide-list">

                <!-- Alam -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 tourguide-item" data-category="alam">
                    <div class="tourguide-card text-center shadow-sm p-4 rounded-4 bg-white">
                        <div class="guide-photo mb-3">
                            <img src="{{ asset('assets/img/tourguide/foto1.jpeg') }}" alt="Choi Woo Shik"
                                class="rounded-circle">
                        </div>
                        <h5 class="fw-bold mb-1">Choi Woo Shik</h5>
                        <p class="text-muted mb-2">Berpengalaman di Alam & Budaya</p>
                        <div class="rating mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-primary btn-sm lihat-detail" data-bs-toggle="modal"
                                data-bs-target="#detailTourGuide" data-nama="Choi Woo Shik" data-usia="30 Tahun"
                                data-deskripsi="Tour guide berpengalaman lebih dari 5 tahun di destinasi wisata alam dan budaya Sumatera Barat."
                                data-sertifikasi="Sertifikasi Nasional Pemandu Wisata" data-nohp="081234567890"
                                data-foto="{{ asset('assets/img/tourguide/foto1.jpeg') }}">
                                Detail
                            </button>
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="btn btn-success btn-sm">Hubungi</a>
                        </div>
                    </div>
                </div>

                <!-- Kuliner -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 tourguide-item" data-category="kuliner">
                    <div class="tourguide-card text-center shadow-sm p-4 rounded-4 bg-white">
                        <div class="guide-photo mb-3">
                            <img src="{{ asset('assets/img/tourguide/foto1.jpeg') }}" alt="Uda Edward"
                                class="rounded-circle">
                        </div>
                        <h5 class="fw-bold mb-1">Uda Edward</h5>
                        <p class="text-muted mb-2">Ahli Kuliner Padang</p>
                        <div class="rating mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-primary btn-sm lihat-detail" data-bs-toggle="modal"
                                data-bs-target="#detailTourGuide" data-nama="Uda Edward" data-usia="35 Tahun"
                                data-deskripsi="Pemandu wisata kuliner terbaik, mengenal berbagai makanan khas Minang dengan sejarahnya."
                                data-sertifikasi="Sertifikasi Kuliner Nusantara" data-nohp="081298765432"
                                data-foto="{{ asset('assets/img/tourguide/foto1.jpeg') }}">
                                Detail
                            </button>
                            <a href="https://wa.me/6281298765432" target="_blank"
                                class="btn btn-success btn-sm">Hubungi</a>
                        </div>
                    </div>
                </div>
                <!-- Budaya -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 tourguide-item" data-category="budaya">
                    <div class="tourguide-card text-center shadow-sm p-4 rounded-4 bg-white">
                        <div class="guide-photo mb-3">
                            <img src="{{ asset('assets/img/tourguide/foto1.jpeg') }}" alt="Uda Edward"
                                class="rounded-circle">
                        </div>
                        <h5 class="fw-bold mb-1">Uda Edward</h5>
                        <p class="text-muted mb-2">Ahli Budaya Padang</p>
                        <div class="rating mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-primary btn-sm lihat-detail" data-bs-toggle="modal"
                                data-bs-target="#detailTourGuide" data-nama="Uda Edward" data-usia="35 Tahun"
                                data-deskripsi="Pemandu wisata budaya terbaik, mengenal berbagai tradisi dan adat Minang."
                                data-sertifikasi="Sertifikasi Budaya Nusantara" data-nohp="081298765432"
                                data-foto="{{ asset('assets/img/tourguide/foto1.jpeg') }}">
                                Detail
                            </button>
                            <a href="https://wa.me/6281298765432" target="_blank"
                                class="btn btn-success btn-sm">Hubungi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Detail Tempat tourguide -->
        <form>
            <div class="modal fade" id="detailTourGuide" tabindex="-1" aria-labelledby="detailTourGuideLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row align-items-start">
                                <!-- Foto -->
                                <div class="col-md-4 text-center">
                                    <img src="" alt="Foto Tour Guide" id="fotoTourGuide"
                                        class="img-fluid rounded shadow-sm modal-image"
                                        style="width: 100%; max-height: 300px; object-fit: cover;">
                                </div>

                                <!-- Detail -->
                                <div class="col-md-8">
                                    <h5 class="mb-3 text-primary">Detail Tour Guide</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" id="namaGuide" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Usia</label>
                                            <input type="text" id="usiaGuide" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <textarea id="deskripsiGuide" class="form-control" rows="3" readonly></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Sertifikasi</label>
                                            <input type="text" id="sertifikasiGuide" class="form-control"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Nomor HP</label>
                                            <input type="text" id="nohpGuide" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            // Filter kategori
            const filterBtns = document.querySelectorAll(".filter-btn");
            const guideItems = document.querySelectorAll(".tourguide-item");
            filterBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    const filter = btn.dataset.filter;
                    filterBtns.forEach(b => b.classList.remove("active"));
                    btn.classList.add("active");
                    guideItems.forEach(item => {
                        item.style.display = (filter === "all" || item.dataset.category === filter) ?
                            "block" : "none";
                    });
                });
            });

            // Modal detail
            document.querySelectorAll(".lihat-detail").forEach(btn => {
                btn.addEventListener("click", function() {
                    document.getElementById("fotoTourGuide").src = this.dataset.foto;
                    document.getElementById("namaGuide").value = this.dataset.nama;
                    document.getElementById("usiaGuide").value = this.dataset.usia;
                    document.getElementById("deskripsiGuide").value = this.dataset.deskripsi;
                    document.getElementById("sertifikasiGuide").value = this.dataset.sertifikasi;
                    document.getElementById("nohpGuide").value = this.dataset.nohp;
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
