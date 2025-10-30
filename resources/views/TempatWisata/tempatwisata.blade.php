@extends('layout.dashboard')

@push('styles')
<style>
    .table { table-layout: fixed; width: 100%; }
    .table td {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* Modal Overlay fix */
    .modal { z-index: 2000 !important; }
    .modal-backdrop { z-index: 1995 !important; }

    /* Lebarkan modal */
    .modal-dialog {
        max-width: 800px;
    }

    /* Paksa modal solid putih */
    .modal-content,
    .modal-header,
    .modal-body,
    .modal-footer {
        background-color: #fff !important;
    }

    /* Form layout 2 kolom */
    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem;
    }

    .form-grid label {
        font-weight: 500;
        font-size: 0.9rem;
    }

    /* Tombol modal */
    .modal-footer button {
        min-width: 100px;
    }
</style>
@endpush

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Tempat Wisata Saya</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah Tempat Wisata</button>
    </div>

    <div class="alert alert-info" role="alert">
        <strong>Panduan Pengisian Data Tempat Wisata</strong>
        <ol class="mt-2 mb-0 ps-3">
            <li>Klik tombol <em>Tambah Tempat Wisata</em> untuk menambahkan data baru.</li>
            <li>Isi <strong>Nama Tempat</strong> dan pilih <strong>Kategori</strong> yang sesuai.</li>
            <li>Tulis <strong>Deskripsi</strong> singkat yang informatif.</li>
            <li>Masukkan <strong>Alamat</strong> lengkap agar mudah ditemukan.</li>
            <li>Opsional: isi <strong>Latitude</strong> (-90 sampai 90) dan <strong>Longitude</strong> (-180 sampai 180) bila tersedia.</li>
            <li>Opsional: isi <strong>Tiket Masuk</strong> angka saja, tanpa huruf.</li>
            <li>Opsional: isi <strong>Kontak</strong> yang bisa dihubungi, misal nomor telepon/WhatsApp.</li>
            <li>Opsional: isi <strong>Jam Buka</strong>, contoh: 08:00 - 17:00.</li>
            <li>Untuk <strong>edit</strong>, klik tombol <em>Edit</em> pada baris data, lakukan perubahan, lalu klik <em>Simpan</em>.</li>
            <li>Untuk <strong>hapus</strong>, klik <em>Hapus</em> pada baris data dan konfirmasi.</li>
        </ol>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Tempat</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tempatWisatas as $wisata)
                    <tr>
                        <td>{{ $wisata->nama_tempat }}</td>
                        <td>{{ $wisata->alamat }}</td>
                        <td>{{ $wisata->kontak }}</td>
                        <td>
                            <span class="badge 
                                {{ $wisata->status == 'approved' ? 'bg-success' : 
                                   ($wisata->status == 'pending' ? 'bg-warning' : 'bg-danger') }}">
                                {{ ucfirst($wisata->status) }}
                            </span>
                        </td>
                        <td>
                            <button 
                                class="btn btn-sm btn-primary btn-edit"
                                data-bs-toggle="modal"
                                data-bs-target="#modalEdit"
                                data-id="{{ $wisata->id }}"
                                data-nama="{{ $wisata->nama_tempat }}"
                                data-kategori="{{ $wisata->kategori }}"
                                data-deskripsi="{{ $wisata->deskripsi }}"
                                data-alamat="{{ $wisata->alamat }}"
                                data-latitude="{{ $wisata->latitude }}"
                                data-longitude="{{ $wisata->longitude }}"
                                data-tiket_masuk="{{ $wisata->tiket_masuk }}"
                                data-kontak="{{ $wisata->kontak }}"
                                data-jam_buka="{{ $wisata->jam_buka }}"
                            >Edit</button>
                            <form action="{{ route('tempatwisata.destroy', $wisata->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>

                   
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form class="modal-content bg-white" action="{{ route('tempatwisata.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Tambah Tempat Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grid">
                        <div>
                            <label>Nama Tempat</label>
                            <input name="nama_tempat" class="form-control" required>
                        </div>
                        <div>
                            <label>Kategori</label>
                            <select name="kategori" class="form-select">
                                <option value="alam">Alam</option>
                                <option value="kuliner">Kuliner</option>
                                <option value="budaya">Budaya</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-span-2">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control">
                        </div>
                        <div>
                            <label>Latitude</label>
                            <input name="latitude" class="form-control">
                        </div>
                        <div>
                            <label>Longitude</label>
                            <input name="longitude" class="form-control">
                        </div>
                        <div>
                            <label>Tiket Masuk</label>
                            <input name="tiket_masuk" type="number" class="form-control">
                        </div>
                        <div>
                            <label>Kontak</label>
                            <input name="kontak" class="form-control">
                        </div>
                        <div class="col-span-2">
                            <label>Jam Buka</label>
                            <input name="jam_buka" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit (Reusable) -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form id="formEditWisata" class="modal-content bg-white" action="#" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel">Edit Tempat Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grid">
                        <div>
                            <label>Nama Tempat</label>
                            <input id="edit_nama_tempat" name="nama_tempat" class="form-control" required>
                        </div>
                        <div>
                            <label>Kategori</label>
                            <select id="edit_kategori" name="kategori" class="form-select">
                                <option value="alam">Alam</option>
                                <option value="kuliner">Kuliner</option>
                                <option value="budaya">Budaya</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label>Deskripsi</label>
                            <textarea id="edit_deskripsi" name="deskripsi" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-span-2">
                            <label>Alamat</label>
                            <input id="edit_alamat" name="alamat" class="form-control">
                        </div>
                        <div>
                            <label>Latitude</label>
                            <input id="edit_latitude" name="latitude" class="form-control">
                        </div>
                        <div>
                            <label>Longitude</label>
                            <input id="edit_longitude" name="longitude" class="form-control">
                        </div>
                        <div>
                            <label>Tiket Masuk</label>
                            <input id="edit_tiket_masuk" name="tiket_masuk" type="number" class="form-control">
                        </div>
                        <div>
                            <label>Kontak</label>
                            <input id="edit_kontak" name="kontak" class="form-control">
                        </div>
                        <div class="col-span-2">
                            <label>Jam Buka</label>
                            <input id="edit_jam_buka" name="jam_buka" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Pindahkan semua modal ke body untuk menghindari konflik layout
    document.querySelectorAll('.modal').forEach(function(modalEl){
        if (modalEl.parentElement !== document.body) {
            document.body.appendChild(modalEl);
        }
    });

    // Handler tombol Edit untuk buka modal reusable dan isi data
    var updateUrlTemplate = "{{ route('tempatwisata.update', ['tempatwisata' => ':id']) }}";
    document.querySelectorAll('.btn-edit').forEach(function(btn){
        btn.addEventListener('click', function(){
            var id = this.getAttribute('data-id');
            document.getElementById('edit_nama_tempat').value = this.getAttribute('data-nama') || '';
            document.getElementById('edit_kategori').value = this.getAttribute('data-kategori') || 'alam';
            document.getElementById('edit_deskripsi').value = this.getAttribute('data-deskripsi') || '';
            document.getElementById('edit_alamat').value = this.getAttribute('data-alamat') || '';
            document.getElementById('edit_latitude').value = this.getAttribute('data-latitude') || '';
            document.getElementById('edit_longitude').value = this.getAttribute('data-longitude') || '';
            document.getElementById('edit_tiket_masuk').value = this.getAttribute('data-tiket_masuk') || '';
            document.getElementById('edit_kontak').value = this.getAttribute('data-kontak') || '';
            document.getElementById('edit_jam_buka').value = this.getAttribute('data-jam_buka') || '';

            var form = document.getElementById('formEditWisata');
            form.setAttribute('action', updateUrlTemplate.replace(':id', id));
        });
    });
});
</script>
