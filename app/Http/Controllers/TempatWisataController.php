<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;
use Illuminate\Support\Facades\Auth;

class TempatWisataController extends Controller
{
    public function index()
    {
        $tempatWisatas = TempatWisata::where('user_id', Auth::id())->latest()->get();
        return view('TempatWisata.tempatwisata', compact('tempatWisatas'));
    }
    public function store(Request $request)
    {
        $messages = [
            'latitude.numeric' => 'Latitude harus berupa angka desimal.',
            'latitude.between' => 'Latitude harus antara -90 sampai 90.',
            'longitude.numeric' => 'Longitude harus berupa angka desimal.',
            'longitude.between' => 'Longitude harus antara -180 sampai 180.',
        ];
        $request->validate([
            'nama_tempat'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'alamat'=>'required',
            'latitude'=>'nullable|numeric|between:-90,90',
            'longitude'=>'nullable|numeric|between:-180,180',
            'tiket_masuk'=>'nullable|numeric',
            'kontak'=>'nullable',
            'jam_buka'=>'nullable',
        ], $messages);
        TempatWisata::create(array_merge($request->all(), ['user_id' => Auth::id()]));
        return redirect()->route('tempatwisata.index')->with('success','Tempat wisata berhasil ditambah');
    }
    public function update(Request $request, TempatWisata $tempatwisata)
    {
        if ($tempatwisata->user_id !== Auth::id()) abort(403);
        $messages = [
            'latitude.numeric' => 'Latitude harus berupa angka desimal.',
            'latitude.between' => 'Latitude harus antara -90 sampai 90.',
            'longitude.numeric' => 'Longitude harus berupa angka desimal.',
            'longitude.between' => 'Longitude harus antara -180 sampai 180.',
        ];
        $request->validate([
            'nama_tempat'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'alamat'=>'required',
            'latitude'=>'nullable|numeric|between:-90,90',
            'longitude'=>'nullable|numeric|between:-180,180',
            'tiket_masuk'=>'nullable|numeric',
            'kontak'=>'nullable',
            'jam_buka'=>'nullable',
        ], $messages);
        $tempatwisata->update($request->all());
        return redirect()->route('tempatwisata.index')->with('success','Data berhasil diupdate');
    }
    public function destroy(TempatWisata $tempatwisata)
    {
        if ($tempatwisata->user_id !== Auth::id()) abort(403);
        $tempatwisata->delete();
        return redirect()->route('tempatwisata.index')->with('success','Data berhasil dihapus');
    }
    public function show(TempatWisata $tempatwisata) { abort(404); }
    public function create() { abort(404); }
    public function edit() { abort(404); }
}
