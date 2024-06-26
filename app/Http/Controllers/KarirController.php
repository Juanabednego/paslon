<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Paslon;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    //

    public function index($paslon_id){
        $pk = Karir::where('paslon_id', $paslon_id)->get();
        return view('Karir.paslon', compact('pk', 'paslon_id'));
    }

    public function tambah($paslon_id){
        return view('Karir.tambah', compact('paslon_id'));
    }

    public function store(Request $request, $paslon_id)
    {
        $request->validate([
            'keterangan' => 'required|string',
            'tempat' => 'required|string',
        ]);

        Karir::create([
            'keterangan' => $request->keterangan,
            'tempat' => $request->tempat,
            'paslon_id' => $paslon_id,
        ]);

        return redirect()->route('admin.paslon.karir', $paslon_id)->with('success', 'Karir berhasil ditambahkan.');
    }
    

    public function edit(Karir $karir)
    {
        return view('Karir.edit', compact('karir'));
    }

    public function update(Request $request, Karir $karir)
    {
        $request->validate([
            'keterangan' => 'required|string|max:500',
            'tempat' => 'required|string|max:500'
        ]);

        $karir->update([
            'keterangan' => $request->keterangan,
            'tempat' => $request->tempat
        ]);

        return redirect()->route('admin.paslon.karir', ['paslon_id' => $karir->paslon_id])
                         ->with('success', 'Karir updated successfully!');
    }

    public function delete(Karir $karir)
    {
        $karir->delete();
        return redirect()->route('admin.paslon.karir', ['paslon_id' => $karir->paslon_id])->with('success', 'Karir deleted successfully!');
    }
}
