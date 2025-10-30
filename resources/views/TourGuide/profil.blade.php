@extends('layout.dashboard')

@push('styles')
<style>
    .table { table-layout: fixed; width: 100%; }
    .table td { max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    .modal { z-index: 2000 !important; }
    .modal-backdrop { z-index: 1995 !important; }
    .form-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem; }
</style>
@endpush

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Profil Tour Guide Saya</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah Profil</button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Spesialisasi</th>
                        <th>Bahasa</th>
                        <th>Foto</th>
                        <th>Sertifikat</th>
                        <th>Kontak</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $p)
                    <tr>
                        <td>{{ $p->nama }}</td>
                        <td>{{ ucfirst($p->spesialisasi) }}</td>
                        <td>{{ $p->bahasa }}</td>
                        <td>
                            @if($p->foto)
                                <img src="{{ Storage::disk('public')->url($p->foto) }}" alt="Foto" style="height:40px; width:auto;">
                            @endif
                        </td>
                        <td>
                            @if($p->sertifikat)
                                <a href="{{ Storage::disk('public')->url($p->sertifikat) }}" target="_blank">Lihat</a>
                            @endif
                        </td>
                        <td>{{ $p->kontak }}</td>
                        <td>
                            <span class="badge {{ $p->status=='approved'?'bg-success':($p->status=='pending'?'bg-warning':'bg-danger') }}">
                                {{ ucfirst($p->status) }}
                            </span>
                        </td>
                        <td>
                            <button 
                                class="btn btn-sm btn-primary btn-edit"
                                data-bs-toggle="modal"
                                data-bs-target="#modalEdit"
                                data-id="{{ $p->id }}"
                                data-nama="{{ $p->nama }}"
                                data-spesialisasi="{{ $p->spesialisasi }}"
                                data-pengalaman='@json($p->pengalaman)'
                                data-bahasa="{{ $p->bahasa }}"
                                data-kontak="{{ $p->kontak }}"
                            >Edit</button>
                            <form action="{{ route('tourguide.destroy', $p->id) }}" method="POST" class="d-inline">
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
            <form class="modal-content bg-white" action="{{ route('tourguide.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Tambah Profil Tour Guide</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grid">
                        <div>
                            <label>Nama</label>
                            <input name="nama" class="form-control" required>
                        </div>
                        <div>
                            <label>Spesialisasi</label>
                            <select name="spesialisasi" class="form-select">
                                <option value="alam">Alam</option>
                                <option value="kuliner">Kuliner</option>
                                <option value="budaya">Budaya</option>
                                <option value="campuran">Campuran</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label>Pengalaman</label>
                            <textarea name="pengalaman" class="form-control" rows="2"></textarea>
                        </div>
                        <div>
                            <label>Bahasa</label>
                            <input name="bahasa" class="form-control" placeholder="Indonesia, Inggris">
                        </div>
                        <div>
                            <label>Kontak</label>
                            <input name="kontak" class="form-control" placeholder="08xxxxxxxxxx">
                        </div>
                        <div>
                            <label>Foto Profil</label>
                            <input type="file" name="foto" class="form-control" accept="image/*">
                        </div>
                        <div>
                            <label>Bukti Sertifikat (PDF/JPG/PNG)</label>
                            <input type="file" name="sertifikat" class="form-control" accept=".pdf,image/*">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form id="formEditTG" class="modal-content bg-white" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel">Edit Profil Tour Guide</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grid">
                        <div>
                            <label>Nama</label>
                            <input id="edit_nama" name="nama" class="form-control" required>
                        </div>
                        <div>
                            <label>Spesialisasi</label>
                            <select id="edit_spesialisasi" name="spesialisasi" class="form-select">
                                <option value="alam">Alam</option>
                                <option value="kuliner">Kuliner</option>
                                <option value="budaya">Budaya</option>
                                <option value="campuran">Campuran</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label>Pengalaman</label>
                            <textarea id="edit_pengalaman" name="pengalaman" class="form-control" rows="2"></textarea>
                        </div>
                        <div>
                            <label>Bahasa</label>
                            <input id="edit_bahasa" name="bahasa" class="form-control">
                        </div>
                        <div>
                            <label>Kontak</label>
                            <input id="edit_kontak" name="kontak" class="form-control">
                        </div>
                        <div>
                            <label>Foto Profil (kosongkan jika tidak diubah)</label>
                            <input type="file" name="foto" class="form-control" accept="image/*">
                            @if(isset($p) && $p->foto)
                                <small class="text-muted">Saat ini: {{ $p->foto }}</small>
                            @endif
                        </div>
                        <div>
                            <label>Bukti Sertifikat (kosongkan jika tidak diubah)</label>
                            <input type="file" name="sertifikat" class="form-control" accept=".pdf,image/*">
                            @if(isset($p) && $p->sertifikat)
                                <small class="text-muted">Saat ini: {{ $p->sertifikat }}</small>
                            @endif
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
document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.modal').forEach(function(m){ if(m.parentElement !== document.body){ document.body.appendChild(m);} });
    var updateUrlTemplate = "{{ route('tourguide.update', ['tourguide' => ':id']) }}";
    document.querySelectorAll('.btn-edit').forEach(function(btn){
        btn.addEventListener('click', function(){
            var id = this.getAttribute('data-id');
            document.getElementById('edit_nama').value = this.getAttribute('data-nama') || '';
            document.getElementById('edit_spesialisasi').value = this.getAttribute('data-spesialisasi') || 'campuran';
            document.getElementById('edit_pengalaman').value = this.getAttribute('data-pengalaman') || '';
            document.getElementById('edit_bahasa').value = this.getAttribute('data-bahasa') || '';
            document.getElementById('edit_kontak').value = this.getAttribute('data-kontak') || '';
            var form = document.getElementById('formEditTG');
            form.setAttribute('action', updateUrlTemplate.replace(':id', id));
        });
    });
});
</script>


