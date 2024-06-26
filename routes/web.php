<?php

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Galeri;
use App\Models\Paslon;
use App\Models\Program;
use App\Models\Official;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OrganisasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// VISITOR BUPATI
Route::get('/paslon/bupati', [VisitorController::class, 'profil_bupati'])->name('paslon.bupati');

// VISITOR WAKIL BUPATI
Route::get('/paslon/wakil-bupati', [VisitorController::class, 'profil_wakil_bupati'])->name('paslon.wakil.bupati');






// MIDDLEWARE ADMIN
Route::middleware(['admin'])->group(function () {
    
    // VISI
    Route::get('admin/visi', [VisiController::class, 'index'])->name('admin.visi');
    Route::get('admin/tambah-visi', [VisiController::class, 'tambah'])->name('admin.tambah-visi');
    Route::post('admin/store-visi', [VisiController::class, 'store'])->name('admin.store-visi');
    Route::get('admin/edit-visi/{visi}', [VisiController::class, 'edit'])->name('admin.edit-visi');
    Route::patch('admin/update-visi/{visi}', [VisiController::class, 'update'])->name('admin.update-visi');
    Route::get('admin/delete-visi/{visi}', [VisiController::class, 'delete'])->name('admin.delete-visi');



    // MISI
    Route::get('admin/misi', [MisiController::class, 'index'])->name('admin.misi');
    Route::get('admin/tambah-misi', [MisiController::class, 'tambah'])->name('admin.tambah-misi');
    Route::post('admin/store-misi', [MisiController::class, 'store'])->name('admin.store-misi');
    Route::get('admin/edit-misi/{misi}', [MisiController::class, 'edit'])->name('admin.edit-misi');
    Route::patch('admin/update-misi/{misi}', [MisiController::class, 'update'])->name('admin.update-misi');
    Route::get('admin/delete-misi/{misi}', [MisiController::class, 'delete'])->name('admin.delete-misi');



    // PROGRAM
    Route::get('admin/program', [ProgramController::class, 'index'])->name('admin.program');
    Route::get('admin/tambah-program', [ProgramController::class, 'tambah'])->name('admin.tambah-program');
    Route::post('admin/store-program', [ProgramController::class, 'store'])->name('admin.store-program');
    Route::get('admin/edit-program/{program}', [ProgramController::class, 'edit'])->name('admin.edit-program');
    Route::patch('admin/update-program/{program}', [ProgramController::class, 'update'])->name('admin.update-program');
    Route::get('admin/delete-program/{program}', [ProgramController::class, 'delete'])->name('admin.delete-program');




    // PROFIL PASLON BUPATI
    Route::get('admin/paslon/bupati', [PaslonController::class, 'index_bupati'])->name('admin.paslon.bupati');
    Route::get('admin/paslon/edit-bupati/', [PaslonController::class, 'edit_bupati'])->name('admin.paslon.edit-bupati');
    Route::patch('admin/paslon/update-bupati', [PaslonController::class, 'update_bupati'])->name('admin.paslon.update-bupati');



    // PROFIL PASLON WAKIL BUPATI
    Route::get('admin/paslon/wakil-bupati', [PaslonController::class, 'index_wakil_bupati'])->name('admin.paslon.wakil-bupati');
    Route::get('admin/paslon/edit-wakil-bupati/', [PaslonController::class, 'edit_wakil_bupati'])->name('admin.paslon.edit-wakil-bupati');
    Route::patch('admin/paslon/update-wakil-bupati', [PaslonController::class, 'update_wakil_bupati'])->name('admin.paslon.update-wakil-bupati');



    // KARIR PASLON
    Route::get('admin/paslon/karir/{paslon_id}', [KarirController::class, 'index'])->name('admin.paslon.karir');
    Route::get('admin/paslon/karir/edit/{karir}', [KarirController::class, 'edit'])->name('admin.karir.edit');
    Route::patch('admin/paslon/karir/update/{karir}', [KarirController::class, 'update'])->name('admin.karir.update');
    Route::delete('admin/paslon/karir/delete/{karir}', [KarirController::class, 'delete'])->name('admin.karir.delete');
    Route::get('admin/paslon/karir/tambah/{paslon_id}', [KarirController::class, 'tambah'])->name('admin.karir.tambah');
    Route::post('admin/paslon/karir/store/{paslon_id}', [KarirController::class, 'store'])->name('admin.karir.store');
    



    // EDUKASI PASLON
    Route::get('admin/paslon/edukasi/{paslon_id}', [EducationController::class, 'index'])->name('admin.paslon.edukasi');
    Route::get('admin/paslon/edukasi/tambah/{paslon_id}', [EducationController::class, 'tambah'])->name('admin.edukasi.tambah');
    Route::post('admin/paslon/edukasi/store/{paslon_id}', [EducationController::class, 'store'])->name('admin.edukasi.store');
    Route::get('admin/paslon/edukasi/edit/{education}', [EducationController::class, 'edit'])->name('admin.edukasi.edit');
    Route::patch('admin/paslon/edukasi/update/{education}', [EducationController::class, 'update'])->name('admin.edukasi.update');
    Route::delete('admin/paslon/edukasi/delete/{education}', [EducationController::class, 'delete'])->name('admin.edukasi.delete');



    // ORGANISASI PASLON 
    Route::get('admin/paslon/organisasi/{paslon_id}', [OrganisasiController::class, 'index'])->name('admin.paslon.organisasi');
    Route::get('admin/paslon/organisasi/tambah/{paslon_id}', [OrganisasiController::class, 'tambah'])->name('admin.organisasi.tambah');
    Route::post('admin/paslon/organisasi/store/{paslon_id}', [OrganisasiController::class, 'store'])->name('admin.organisasi.store');
    Route::get('admin/paslon/organisasi/edit/{organisasi}', [OrganisasiController::class, 'edit'])->name('admin.organisasi.edit');
    Route::patch('admin/paslon/organisasi/update/{organisasi}', [OrganisasiController::class, 'update'])->name('admin.organisasi.update');    
    Route::delete('admin/paslon/organisasi/delete/{organisasi}', [OrganisasiController::class, 'delete'])->name('admin.organisasi.delete');
    
        //aktivitas di organisasi
    Route::get('admin/paslon/aktivitas/{organisasi_id}', [OrganisasiController::class, 'index_aktivitas'])->name('admin.paslon.aktivitas');
    Route::get('admin/paslon/aktivitas/tambah/{organisasi_id}', [OrganisasiController::class, 'tambah_aktivitas'])->name('admin.aktivitas.tambah');
    Route::post('admin/paslon/aktivitas/store/{organisasi_id}', [OrganisasiController::class, 'store_aktivitas'])->name('admin.aktivitas.store');    
    Route::get('admin/paslon/aktivitas/edit/{aktivitas}', [OrganisasiController::class, 'edit_aktivitas'])->name('admin.aktivitas.edit');
    Route::patch('admin/paslon/aktivitas/update/{aktivitas}', [OrganisasiController::class, 'update_aktivitas'])->name('admin.aktivitas.update'); 
    Route::delete('admin/paslon/aktivitas/delete/{aktivitas}', [OrganisasiController::class, 'delete_aktivitas'])->name('admin.aktivitas.delete');




    // GALERI
    Route::get('admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
    Route::get('admin/galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
    Route::post('admin/galeri/store', [GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('admin/galeri/edit/{galeri}', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::patch('admin/galeri/update/{galeri}', [GaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('admin/galeri/delete/{galeri}', [GaleriController::class, 'destroy'])->name('admin.galeri.delete');



    // OFFICIAL
    Route::get('admin/official', [OfficialController::class, 'index'])->name('admin.official');
    Route::get('admin/official/create', [OfficialController::class, 'create'])->name('admin.official.create');
    Route::post('admin/official/store', [OfficialController::class, 'store'])->name('admin.official.store');
    Route::get('admin/official/edit/{official}', [OfficialController::class, 'edit'])->name('admin.official.edit');
    Route::patch('admin/official/update/{official}', [OfficialController::class, 'update'])->name('admin.official.update');
    
    
});


















Route::get('/', [VisitorController::class, 'index'])->name('visitor.index');
Route::get('/visi', function () {
    return view('edit_visi');
});
Route::get('/misi', function () {
    return view('edit_misi');
});
Route::get('/dashboard', function () {
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
})->middleware('auth'); 
Route::get('/profile', function(){
    return view('profile.profile');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('tes', function () {
    return 1;
});









// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('home.home');
// });


