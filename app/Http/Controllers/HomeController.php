<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $visi = Visi::all();
        $misi = Misi::all();
        $program = Program::all();
        $tvisi = 0; $tmisi = 0; $tprogram = 0;

        foreach ($visi as $v) {
            $tvisi += 1;
        }
        
        foreach ($misi as $m){
            $tmisi += 1;
        }

        foreach ($program as $p){
            $tprogram += 1;
        }

        return view('dashboard', compact('tvisi', 'tmisi', 'tprogram'));
    }

    public function showVisiHome()
    {
        // $visi = Visi::first();
        return view('home.home', compact('visi'));
    }
}
