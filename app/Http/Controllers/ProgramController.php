<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //

    public function index(){
        $programs = Program::all();
        return view('Program.index', compact('programs'));
    }

    public function tambah(){
        return view('Program.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required|max:255',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/images');
            $image->move($destinationPath, $name);

            Program::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'gambar' => $name
            ]);

            return redirect()->route('admin.program')->with('success', 'Program berhasil ditambahkan!');
        }
    }

    public function edit(Program $program)
    {
        return view('Program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'keterangan' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image
            if (file_exists(public_path('/storage/images/' . $program->gambar))) {
                unlink(public_path('/storage/images/' . $program->gambar));
            }

            $image = $request->file('gambar');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/images');
            $image->move($destinationPath, $name);
        } else {
            $name = $program->gambar;
        }

        $program->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'gambar' => $name
        ]);

        return redirect()->route('admin.program')->with('success', 'Program berhasil diupdate!');
    }

    public function delete(Program $program)
    {
        // Delete image
        if (file_exists(public_path('/storage/images/' . $program->gambar))) {
            unlink(public_path('/storage/images/' . $program->gambar));
        }

        $program->delete();
        return redirect()->route('admin.program')->with('success', 'Program berhasil dihapus!');
    }

}
