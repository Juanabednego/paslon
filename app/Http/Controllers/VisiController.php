<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VisiController extends Controller
{
    //

    public function index()
    {
        $visis = Visi::orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->get();
        return view('Visi.index', compact('visis'));
    }

    public function tambah(){
        return view('Visi.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        Visi::create([
            'isi' => $request->isi
        ]);

        return Redirect::route('admin.visi')->with('success', 'Visi created successfully!');
    }


    public function edit(Visi $visi)
    {
        return view('visi.edit', compact('visi'));
    }

    public function update(Request $request, Visi $visi)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        $visi->update([
            'isi' => $request->isi
        ]);

        return Redirect::route('admin.visi')->with('success', 'Visi updated successfully!');
    }

    public function delete(Visi $visi)
    {
        $visi->delete();
        return Redirect::route('admin.visi')->with('success', 'Visi deleted successfully!');
    }
    

}
