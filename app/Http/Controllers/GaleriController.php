<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //

    public function index(){
        $galeri = Galeri::all();
        return view("Galeri.index", compact("galeri"));
    }

    public function create()
    {
        return view('Galeri.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->path->extension();
        $request->path->move(public_path('images'), $imageName);

        Galeri::create(['path' => $imageName]);

        return redirect()->route('admin.galeri')->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('Galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('path')) {
            // Delete old image
            if (file_exists(public_path('images/' . $galeri->path))) {
                unlink(public_path('images/' . $galeri->path));
            }

            // Store new image
            $imageName = time().'.'.$request->path->extension();
            $request->path->move(public_path('images'), $imageName);
            $galeri->update(['path' => $imageName]);
        }

        return redirect()->route('admin.galeri')->with('success', 'Gambar berhasil diupdate.');
    }

    public function destroy(Galeri $galeri)
    {
        if (file_exists(public_path('images/' . $galeri->path))) {
            unlink(public_path('images/' . $galeri->path));
        }
        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Gambar berhasil dihapus.');
    }

}
