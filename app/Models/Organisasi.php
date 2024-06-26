<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $table = 'organisasi';

    protected $fillable = [
        'paslon_id',
        'nama',
        'lokasi',
        'posisi',
        'tahun_mulai',
        'tahun_sampai'
    ];

    
    public function paslon(){
        return $this->belongsTo(Paslon::class);
    }

    public function aktivitas(){
        return $this->hasMany(PengalamanOrganisasi::class);
    }
}
