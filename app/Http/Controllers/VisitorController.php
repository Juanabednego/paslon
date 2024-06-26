<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Misi;
use App\Models\Visi;
use App\Models\Galeri;
use App\Models\Paslon;
use App\Models\Program;
use App\Models\Official;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    //
    public function index(){
        $visis = Visi::all();
        $misis = Misi::all();
        $programs = Program::all();
        $bupati = Paslon::where('calon_role', 'Bupati')->first();
        $wakil_bupati = Paslon::where('calon_role', 'Wakil Bupati')->first();
        $galeri = Galeri::all();
        $official = Official::first();
        return view('home.home', compact('visis', 'misis', 'programs', 'bupati', 'wakil_bupati', 'galeri', 'official'));
    }

    // public function profil_bupati()
    // {
    //     $bupati = Paslon::where('calon_role', 'Bupati')->first();
    //     $tanggal_lahir = Carbon::parse($bupati->tanggal_lahir);
    //     $umur = $tanggal_lahir->diffInYears(Carbon::now());
    //     return view('Profil_Paslon.bupati', compact('bupati', 'umur'));
    // }

    public function profil_bupati()
    {
    $bupati = Paslon::where('calon_role', 'Bupati')->first();
    
    if (!$bupati) {
        // Handle jika tidak ada data yang ditemukan
        abort(404); // Contoh: lempar error 404
    }
    
    $tanggal_lahir = Carbon::parse($bupati->tanggal_lahir);
    $umur = $tanggal_lahir->diffInYears(Carbon::now());
    
    return view('Profil_Paslon.bupati', compact('bupati', 'umur'));
    }


    public function profil_wakil_bupati()
    {
        $wb = Paslon::where('calon_role', 'Wakil Bupati')->first();

        if (!$wb) {
            // Handle jika tidak ada data yang ditemukan
            abort(404); // Contoh: lempar error 404
        }

        $tanggal_lahir = Carbon::parse($wb->tanggal_lahir);
        $umur = $tanggal_lahir->diffInYears(Carbon::now());
        
        return view('Profil_Paslon.wakil_bupati', compact('wb', 'umur'));
    }
    
}
