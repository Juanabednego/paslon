<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EducationController extends Controller
{
    //
    
    public function index($paslon_id){
        $pe = Education::where('paslon_id', $paslon_id)->get();
        return view('Education.index', compact('pe', 'paslon_id'));
    }

    public function tambah($paslon_id){
        return view('Education.tambah', compact('paslon_id'));
    }

    public function store(Request $request, $paslon_id)
    {
        // Validasi inputan
        $request->validate([
            'program_studi' => 'required|string|max:255',
            'tahun_mulai' => 'required|integer|min:1900|max:' . (Carbon::now()->year),
            'tahun_selesai' => 'required|integer|min:1900|max:' . (Carbon::now()->year),
            'kampus' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        if ($request->tahun_mulai > $request->tahun_selesai) {
            return redirect()->back()->withErrors(['tahun_mulai' => 'Tahun mulai harus lebih kecil daripada tahun selesai.']);
        }

        // Simpan data ke database
        Education::create([
            'paslon_id' => $paslon_id,
            'program_studi' => $request->program_studi,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
            'kampus' => $request->kampus,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.paslon.edukasi', $paslon_id)->with('success', 'Education berhasil ditambahkan.');
    }

    public function edit(Education $education)
    {
        return view('Education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        // Validasi inputan
        $request->validate([
            'program_studi' => 'required|string|max:255',
            'tahun_mulai' => 'required|integer|min:1900|max:' . (Carbon::now()->year),
            'tahun_selesai' => 'required|integer|min:1900|max:' . (Carbon::now()->year),
            'kampus' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        if ($request->tahun_mulai > $request->tahun_selesai) {
            return redirect()->back()->withErrors(['tahun_mulai' => 'Tahun mulai harus lebih kecil daripada tahun selesai.']);
        }

        // Update data di database
        $education->update([
            'program_studi' => $request->program_studi,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
            'kampus' => $request->kampus,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.paslon.edukasi', ['paslon_id' => $education->paslon_id])
                         ->with('success', 'Education berhasil diperbarui!');
    }

    public function delete(Education $education)
    {
        $education->delete();
        return redirect()->route('admin.paslon.edukasi', ['paslon_id' => $education->paslon_id])->with('success', 'Education berhasil dihapus!');
    }

}
