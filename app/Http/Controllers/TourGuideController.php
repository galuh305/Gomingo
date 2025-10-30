<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TourGuideController extends Controller
{
    public function index()
    {
        $profiles = TourGuide::where('user_id', Auth::id())->latest()->get();
        return view('tourguide.profil', compact('profiles'));
    }

    public function store(Request $request)
    {
        $messages = [];
        $request->validate([
            'nama' => 'required|string|max:150',
            'spesialisasi' => 'required|in:alam,kuliner,budaya,campuran',
            'pengalaman' => 'nullable|string',
            'bahasa' => 'nullable|string|max:100',
            'kontak' => 'nullable|string|max:50',
            'foto' => 'nullable|image|max:2048',
            'sertifikat' => 'nullable|mimes:pdf,jpg,jpeg,png|max:3072',
        ], $messages);

        $data = $request->only(['nama','spesialisasi','pengalaman','bahasa','kontak']);
        $data['user_id'] = Auth::id();

        // Pastikan direktori ada
        Storage::disk('public')->makeDirectory('tourguide/photos');
        Storage::disk('public')->makeDirectory('tourguide/certificates');

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/tourguide/photos');
            $data['foto'] = str_replace('public/', '', $path);
        }
        if ($request->hasFile('sertifikat')) {
            $path = $request->file('sertifikat')->store('public/tourguide/certificates');
            $data['sertifikat'] = str_replace('public/', '', $path);
        }

        TourGuide::create($data);
        return redirect()->route('tourguide.index')->with('success', 'Profil berhasil ditambah');
    }

    public function update(Request $request, TourGuide $tourguide)
    {
        if ($tourguide->user_id !== Auth::id()) abort(403);
        $messages = [];
        $request->validate([
            'nama' => 'required|string|max:150',
            'spesialisasi' => 'required|in:alam,kuliner,budaya,campuran',
            'pengalaman' => 'nullable|string',
            'bahasa' => 'nullable|string|max:100',
            'kontak' => 'nullable|string|max:50',
        ], $messages);

        $data = $request->only(['nama','spesialisasi','pengalaman','bahasa','kontak']);
        // Pastikan direktori ada
        Storage::disk('public')->makeDirectory('tourguide/photos');
        Storage::disk('public')->makeDirectory('tourguide/certificates');

        if ($request->hasFile('foto')) {
            if ($tourguide->foto) { @unlink(public_path('storage/'.$tourguide->foto)); }
            $path = $request->file('foto')->store('public/tourguide/photos');
            $data['foto'] = str_replace('public/', '', $path);
        }
        if ($request->hasFile('sertifikat')) {
            if ($tourguide->sertifikat) { @unlink(public_path('storage/'.$tourguide->sertifikat)); }
            $path = $request->file('sertifikat')->store('public/tourguide/certificates');
            $data['sertifikat'] = str_replace('public/', '', $path);
        }

        $tourguide->update($data);
        return redirect()->route('tourguide.index')->with('success', 'Profil berhasil diperbarui');
    }

    public function destroy(TourGuide $tourguide)
    {
        if ($tourguide->user_id !== Auth::id()) abort(403);
        $tourguide->delete();
        return redirect()->route('tourguide.index')->with('success', 'Profil berhasil dihapus');
    }
}


