<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MisiController extends Controller
{
    //
    

    public function index()
    {
        $misis = Misi::orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get();
        return view('Misi.index', compact('misis'));
    }

    public function tambah(){
        return view('Misi.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        Misi::create([
            'isi' => $request->isi
        ]);

        return Redirect::route('admin.misi')->with('success', 'Misi created successfully!');
    }


    public function edit(Misi $misi)
    {
        return view('misi.edit', compact('misi'));
    }

    public function update(Request $request, Misi $misi)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        $misi->update([
            'isi' => $request->isi
        ]);

        return Redirect::route('admin.misi')->with('success', 'Misi updated successfully!');
    }

    public function delete(Misi $misi)
    {
        $misi->delete();
        return Redirect::route('admin.misi')->with('success', 'Misi deleted successfully!');
    }
}
