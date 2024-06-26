<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;



class PaslonController extends Controller
{
    //

    

    // BUPATI
    public function index_bupati(){
        $bupati = Paslon::where('calon_role', 'Bupati')->first();
        return view('Paslon.bupati', compact('bupati'));
    }

    public function edit_bupati(){
        $bupati = Paslon::where('calon_role', 'Bupati')->first();
        $paslon_id = $bupati->id;
        return view('Paslon.bupati_edit', compact('bupati', 'paslon_id'));
    }

    public function update_bupati(Request $request){
        $bupati = Paslon::where('calon_role', 'Bupati')->first();

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'degree' => 'required',
            'email' => 'required|email',
            'agama' => 'required',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'skype' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($request->hasFile('foto')){
            // Delete old photo
            if($bupati->foto && Storage::exists('public/images/' . $bupati->foto)){
                Storage::delete('public/images/' . $bupati->foto);
            }

            // Store new photo
            $fileName = time() . '_' . $request->foto->getClientOriginalName();
            $request->foto->storeAs('public/images', $fileName);
            $bupati->foto = $fileName;
        }
        
        $bupati->update($request->only([
            'nama', 'deskripsi', 'tanggal_lahir', 'tempat_lahir' ,'nomor_hp', 'alamat', 'degree', 'email', 'agama', 'facebook', 'twitter', 'instagram', 'skype', 'linkedin'
        ]));

        return Redirect::route('admin.paslon.bupati')->with('success', 'Profil Calon Bupati updated successfully!');
    }


    // WAKIL BUPATI
    public function index_wakil_bupati(){
        $wakil_bupati = Paslon::where('calon_role', 'Wakil Bupati')->first();
        return view('Paslon.wakil_bupati', compact('wakil_bupati'));
    }

    public function edit_wakil_bupati(){
        $wakil_bupati = Paslon::where('calon_role', 'Wakil Bupati')->first();
        $paslon_id = $wakil_bupati->id;
        return view('Paslon.wakil_bupati_edit', compact('wakil_bupati', 'paslon_id'));
    }

    public function update_wakil_bupati(Request $request){
        $wakil_bupati = Paslon::where('calon_role', 'Wakil Bupati')->first();

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'degree' => 'required',
            'email' => 'required|email',
            'agama' => 'required',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'skype' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($request->hasFile('foto')){
            // Delete old photo
            if($wakil_bupati->foto && Storage::exists('public/images/' . $wakil_bupati->foto)){
                Storage::delete('public/images/' . $wakil_bupati->foto);
            }

            // Store new photo
            $fileName = time() . '_' . $request->foto->getClientOriginalName();
            $request->foto->storeAs('public/images', $fileName);
            $wakil_bupati->foto = $fileName;
        }

        $wakil_bupati->update($request->only([
            'nama', 'deskripsi','tempat_lahir', 'tanggal_lahir', 'nomor_hp', 'alamat', 'degree', 'email', 'agama', 'facebook', 'twitter', 'instagram', 'skype', 'linkedin'
        ]));

        return Redirect::route('admin.paslon.wakil-bupati')->with('success', 'Profil Calon Wakil Bupati updated successfully!');
    }
    

}
