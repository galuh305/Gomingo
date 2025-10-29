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
                                            <a class="page-scroll" href="#wisata">Wisata</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="page-scroll" href="#wisata">Wisata Kuliner</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#wisata">Wisata Budaya</a> --}}
                                        </li>
                                    </ul>
                                </div>

                                {{-- <div class="header-action d-flex">
                                    <a href="#0"> <i class="lni lni-cart"></i> </a>
                                    <a href="#0"> <i class="lni lni-alarm"></i> </a>
                                </div> --}}
                                <!-- navbar collapse -->
                            </nav>
                            <!-- navbar -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- navbar area -->
        </header>
        <!-- ========================= header-6 end ========================= -->

        <!-- ========================= hero-5 start ========================= -->
        <div class="hero-section hero-style-5 img-bg"
            style="background-image: url('assets/img/hero/hero-5/hero-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content-wrapper">
                            <h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Jelajahi Keindahan Wisata Sumatera Barat
                            </h2>
                            <p class="mb-30 wow fadeInUp" data-wow-delay=".4s">Sekarang Anda bisa menjelajahi
                                wisata-wisata
                                unik di Sumatera Barat dengan Tour Guide terverifikasi.</p>
                            <a href="#0" class="button button-lg radius-50 wow fadeInUp" data-wow-delay=".6s">Get
                                Started <i class="lni lni-chevron-right"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="hero-image wow fadeInUp" data-wow-delay=".5s">
                            <img src="{{ asset('assets/img/hero/hero-5/hero-img.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========================= hero-5 end ========================= -->

    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start ========================= -->
    <!-- ========================= pricing style-4 end ========================= -->
    <!-- === Katalog Wisata === -->
    <section id="wisata" class="katalog-wisata-section pt-100 pb-100">
        <div class="container">

            <!-- Filter Tombol -->
            <div class="section-title text-center mb-40">
                <h2>Katalog Tempat Wisata</h2>
                <p>Temukan berbagai destinasi wisata menarik dan pilih tour guide favoritmu.</p>
            </div>

            <!-- Pencarian -->
            <div class="text-center mb-4">
                <div class="d-flex justify-content-center">
                    <div class="position-relative w-75">
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

            <!-- Filter Kategori -->
            <div class="text-center mb-50">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="alam">Wisata Alam</button>
                <button class="filter-btn" data-filter="kuliner">Wisata Kuliner</button>
                <button class="filter-btn" data-filter="budaya">Wisata Budaya</button>
            </div>

            <!-- Daftar Kartu Wisata -->
            <div class="row justify-content-center" id="wisata-list">

                <!-- Alam -->
                <div class="col-lg-3 col-md-6 col-sm-12 wisata-item" data-category="alam">
                    <div class="single-pricing-wrapper">
                        <div class="single-pricing">
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/wisata/foto1.jpeg') }}" alt="Pantai Padang"
                                    class="img-fluid">
                            </div>
                            <h4>Pantai Padang</h4>
                            <p>Kota Padang, Sumatera Barat</p>
                            <a href="#0" class="button radius-30 lihat-detail" data-bs-toggle="modal"
                                data-bs-target="#detailWisata" data-img="{{ asset('assets/img/wisata/foto1.jpeg') }}"
                                data-nama="Pantai Padang" data-lokasi="Kota Padang, Sumatera Barat"
                                data-deskripsi="Pantai Padang terkenal dengan pemandangan matahari terbenam yang indah serta ombaknya yang cocok untuk bersantai."
                                data-fasilitas="Area parkir, Gazebo, Toilet umum" data-harga="Rp 10.000"
                                data-kategori="alam">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Kuliner -->
                <div class="col-lg-3 col-md-6 col-sm-12 wisata-item" data-category="kuliner">
                    <div class="single-pricing-wrapper">
                        <div class="single-pricing">
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/wisata/foto1.jpeg') }}" alt="Rendang Padang"
                                    class="img-fluid">
                            </div>
                            <h4>Rumah Makan Sederhana</h4>
                            <p>Padang, Sumatera Barat</p>
                            <a href="#0" class="button radius-30 lihat-detail" data-bs-toggle="modal"
                                data-bs-target="#detailWisata" data-img="{{ asset('assets/img/wisata/foto1.jpeg') }}"
                                data-nama="Rumah Makan Sederhana" data-lokasi="Padang, Sumatera Barat"
                                data-deskripsi="Tempat kuliner legendaris dengan rendang autentik khas Minang."
                                data-fasilitas="Tempat parkir, Mushola" data-harga="Mulai Rp 25.000"
                                data-kategori="kuliner">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Budaya -->
                <div class="col-lg-3 col-md-6 col-sm-12 wisata-item" data-category="budaya">
                    <div class="single-pricing-wrapper">
                        <div class="single-pricing">
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/wisata/foto1.jpeg') }}" alt="Jam Gadang"
                                    class="img-fluid">
                            </div>
                            <h4>Jam Gadang</h4>
                            <p>Bukittinggi, Sumatera Barat</p>
                            <a href="#0" class="button radius-30 lihat-detail" data-bs-toggle="modal"
                                data-bs-target="#detailWisata" data-img="{{ asset('assets/img/wisata/foto1.jpeg') }}"
                                data-nama="Jam Gadang" data-lokasi="Bukittinggi, Sumatera Barat"
                                data-deskripsi="Ikon kota Bukittinggi dan warisan budaya Minangkabau yang terkenal."
                                data-fasilitas="Area wisata, Spot foto" data-harga="Gratis"
                                data-kategori="budaya">Lihat Detail</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal Detail Wisata -->
        <form action="#" method="post">
            <div class="modal fade" id="detailWisata" tabindex="-1" aria-labelledby="detailWisataLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row align-items-start">
                                <!-- Foto -->
                                <div class="col-md-4 text-center">
                                    <img src="" alt="Foto Wisata" id="fotoWisata"
                                        class="img-fluid rounded shadow-sm modal-image"
                                        style="width: 100%; max-height: 300px; object-fit: cover;">
                                </div>

                                <!-- Detail Wisata -->
                                <div class="col-md-8">
                                    <h5 class="mb-3 text-primary">Detail Tempat Wisata</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="namawisata" class="form-label">Nama Tempat</label>
                                            <input type="text" id="namawisata" class="form-control" readonly>
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
                                            <label for="fasilitas" class="form-label">Fasilitas</label>
                                            <input type="text" id="fasilitas" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="harga" class="form-label">Harga Tiket</label>
                                            <input type="text" id="harga" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tour Guide Section -->
                            <hr class="my-4">
                            <h5 class="text-center mb-4">Tour Guide yang Disarankan</h5>
                            <div class="row justify-content-center" id="tourGuideList"></div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Script -->
        <script>
            // === FILTER KATEGORI ===
            const filterButtons = document.querySelectorAll(".filter-btn");
            const wisataItems = document.querySelectorAll(".wisata-item");

            filterButtons.forEach(btn => {
                btn.addEventListener("click", function() {
                    const filter = this.getAttribute("data-filter");
                    filterButtons.forEach(b => b.classList.remove("active"));
                    this.classList.add("active");
                    wisataItems.forEach(item => {
                        item.style.display = (filter === "all" || item.dataset.category === filter) ?
                            "block" : "none";
                    });
                });
            });

            // === MODAL DETAIL ===
            document.addEventListener('DOMContentLoaded', function() {
                const detailButtons = document.querySelectorAll('.lihat-detail');

                detailButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const img = this.dataset.img;
                        const nama = this.dataset.nama;
                        const lokasi = this.dataset.lokasi;
                        const deskripsi = this.dataset.deskripsi;
                        const fasilitas = this.dataset.fasilitas;
                        const harga = this.dataset.harga;
                        const kategori = this.dataset.kategori;

                        document.getElementById('fotoWisata').src = img;
                        document.getElementById('namawisata').value = nama;
                        document.getElementById('lokasi').value = lokasi;
                        document.getElementById('deskripsi').value = deskripsi;
                        document.getElementById('fasilitas').value = fasilitas;
                        document.getElementById('harga').value = harga;

                        const tourGuideList = document.getElementById('tourGuideList');

                        if (kategori === 'alam') {
                            tourGuideList.innerHTML = `
                            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                                <div class="tourguide-card p-3 shadow-sm rounded-4 bg-white">
                                <div class="guide-photo mb-3">
                                    <img src="{{ asset('assets/img/tourguide/foto1.jpeg') }}" alt="Budi" class="rounded-circle">
                                </div>
                                <h5 class="fw-bold mb-1">Budi</h5>
                                <p class="text-muted mb-2">Spesialis Wisata Alam</p>
                                <div class="rating mb-3">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                </div>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#0" class="btn btn-primary btn-sm">Detail Tour Guide</a>
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success btn-sm">Hubungi</a>
                                </div>
                                </div>
                            </div>`;
                                        } else if (kategori === 'budaya') {
                                            tourGuideList.innerHTML = `
                            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                                <div class="tourguide-card p-3 shadow-sm rounded-4 bg-white">
                                <div class="guide-photo mb-3">
                                    <img src="{{ asset('assets/img/tourguide/foto1.jpeg') }}" alt="Nina" class="rounded-circle">
                                </div>
                                <h5 class="fw-bold mb-1">Nina</h5>
                                <p class="text-muted mb-2">Ahli Tur Budaya</p>
                                <div class="rating mb-3">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-half text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                </div>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#0" class="btn btn-primary btn-sm">Detail Tour Guide</a>
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success btn-sm">Hubungi</a>
                                </div>
                                </div>
                            </div>`;
                        } else {
                            tourGuideList.innerHTML =
                                `<p class="text-center">Belum ada tour guide untuk kategori ini.</p>`;
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
