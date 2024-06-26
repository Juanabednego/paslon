<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    //

    public function index(){
        $official = Official ::all();
        return view("Official.index", compact("official"));
    }

    public function create()
    {
        return view('Official.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        Official::create([
            'gambar' => $imageName,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('admin.official')->with('success', 'Official details added successfully.');
    }

    public function edit(Official $official)
    {
        return view('Official.edit', compact('official'));
    }

    public function update(Request $request, Official $official)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        if ($request->hasFile('gambar')) {
            if (file_exists(public_path('images/' . $official->gambar))) {
                unlink(public_path('images/' . $official->gambar));
            }

            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $official->gambar = $imageName;
        }

        $official->update([
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('admin.official')->with('success', 'Official details updated successfully.');
    }


}
