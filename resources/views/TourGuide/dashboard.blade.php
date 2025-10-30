@extends('layout.dashboard')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Dashboard Tour Guide</h2>

    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Profil Terdaftar</h6>
                    <h3>{{ \App\Models\TourGuide::where('user_id', auth()->id())->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Pending</h6>
                    <h3>{{ \App\Models\TourGuide::where('user_id', auth()->id())->where('status','pending')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Approved</h6>
                    <h3>{{ \App\Models\TourGuide::where('user_id', auth()->id())->where('status','approved')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Rejected</h6>
                    <h3>{{ \App\Models\TourGuide::where('user_id', auth()->id())->where('status','rejected')->count() }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-3">Aksi Cepat</h5>
            <a href="#" class="btn btn-primary me-2">Kelola Profil</a>
            <a href="#" class="btn btn-outline-primary">Lihat Status Persetujuan</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Checklist Kelengkapan Profil</h5>
            <ul class="mb-0">
                <li>Isi Nama dan Spesialisasi (alam/kuliner/budaya/campuran).</li>
                <li>Tambahkan Pengalaman singkat dan Bahasa yang dikuasai.</li>
                <li>Lengkapi Kontak aktif (telepon/WhatsApp) dan unggah Foto profil.</li>
                <li>Pastikan profil rapi untuk proses persetujuan cepat.</li>
            </ul>
        </div>
    </div>
</div>
@endsection


