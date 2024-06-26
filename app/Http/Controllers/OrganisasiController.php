<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use App\Models\PengalamanOrganisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    //

    public function index($paslon_id){
        $op = Organisasi::where('paslon_id', $paslon_id)->get();
        return view('Organisasi.index', compact('op', 'paslon_id'));
    }

    public function tambah($paslon_id){
        return view('Organisasi.tambah', compact('paslon_id'));
    }

    public function store(Request $request, $paslon_id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'tahun_mulai' => 'required|string|max:4',
            'tahun_sampai' => 'required|string|max:7', // Present or year (e.g., 2023)
        ]);
    
        Organisasi::create([
            'paslon_id' => $paslon_id,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'posisi' => $request->posisi,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_sampai' => $request->tahun_sampai,
        ]);
    
        return redirect()->route('admin.paslon.organisasi', $paslon_id)->with('success', 'Organisasi berhasil ditambahkan.');
    }
    
    public function edit(Organisasi $organisasi)
    {
        return view('Organisasi.edit', compact('organisasi'));
    }

    public function update(Request $request, Organisasi $organisasi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'tahun_mulai' => 'required|string|max:4',
            'tahun_sampai' => 'required|string|max:7', // Present or year (e.g., 2023)
        ]);
    
        $organisasi->update([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'posisi' => $request->posisi,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_sampai' => $request->tahun_sampai,
        ]);
    
        return redirect()->route('admin.paslon.organisasi', ['paslon_id' => $organisasi->paslon_id])
                         ->with('success', 'Organisasi updated successfully!');
    }

    public function delete(Organisasi $organisasi)
    {
        $organisasi->delete();
        return redirect()->route('admin.paslon.organisasi', ['paslon_id' => $organisasi->paslon_id])->with('success', 'Organisasi berhasil dihapus!');
    }

    public function index_aktivitas($organisasi_id){
        $aktivitas = PengalamanOrganisasi::where('organisasi_id', $organisasi_id)->get();
        $org = Organisasi::find($organisasi_id);
        $norg = $org->nama;
        $paslon_id = $org->paslon->id;
        return view('Organisasi.aktivitas', compact('aktivitas', 'organisasi_id', 'norg', 'paslon_id'));
    }

    
    public function tambah_aktivitas($organisasi_id){
        $org = Organisasi::find($organisasi_id);
        $norg = $org->nama;
        return view('Organisasi.tambah_aktivitas', compact('organisasi_id', 'norg'));
    }

    public function store_aktivitas(Request $request, $organisasi_id)
    {
        $request->validate([
            'keterangan' => 'required|string|max:255',
        ], [
            'keterangan.required' => 'Keterangan wajib diisi.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari 255 karakter.',
        ]);
    
        PengalamanOrganisasi::create([
            'organisasi_id' => $organisasi_id,
            'keterangan' => $request->input('keterangan')
        ]);
    
        return redirect()->route('admin.paslon.aktivitas', $organisasi_id)->with('success', 'Aktivitas berhasil ditambahkan.');
    }
    
    public function edit_aktivitas(PengalamanOrganisasi $aktivitas)
    {
        return view('Organisasi.edit_aktivitas', compact('aktivitas'));
    }

    public function update_aktivitas(Request $request, PengalamanOrganisasi $aktivitas)
    {
        $request->validate([
            'keterangan' => 'required|string',
        ]);

        $aktivitas->keterangan = $request->keterangan;
        $aktivitas->save();

        return redirect()->route('admin.paslon.aktivitas', ['organisasi_id' => $aktivitas->organisasi_id])
                         ->with('success', 'Aktivitas berhasil diupdate.');
    }
    
    public function delete_aktivitas(PengalamanOrganisasi $aktivitas)
    {
        $organisasi_id = $aktivitas->organisasi_id;
        $aktivitas->delete();
        return redirect()->route('admin.paslon.aktivitas', ['organisasi_id' => $organisasi_id])
                         ->with('success', 'Aktivitas berhasil dihapus.');
    }
    

}
