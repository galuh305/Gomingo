@extends('layout.dashboard')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Dashboard Tempat Wisata</h2>

    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Total Tempat</h6>
                    <h3>{{ \App\Models\TempatWisata::where('user_id', auth()->id())->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Pending</h6>
                    <h3>{{ \App\Models\TempatWisata::where('user_id', auth()->id())->where('status','pending')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Approved</h6>
                    <h3>{{ \App\Models\TempatWisata::where('user_id', auth()->id())->where('status','approved')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-muted">Rejected</h6>
                    <h3>{{ \App\Models\TempatWisata::where('user_id', auth()->id())->where('status','rejected')->count() }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-3">Aksi Cepat</h5>
            <a href="{{ route('tempatwisata.index') }}" class="btn btn-primary me-2">Kelola Daftar Tempat</a>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah Tempat Wisata</button>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Checklist Kelengkapan Data</h5>
            <ul class="mb-0">
                <li>Lengkapi Nama, Kategori, dan Deskripsi.</li>
                <li>Isi Alamat dan Koordinat (Latitude/Longitude) bila tersedia.</li>
                <li>Tambahkan Kontak dan Jam Buka yang mudah dihubungi.</li>
                <li>Upload foto pada masing-masing tempat (fitur foto menyusul).</li>
            </ul>
        </div>
    </div>
</div>
@endsection
