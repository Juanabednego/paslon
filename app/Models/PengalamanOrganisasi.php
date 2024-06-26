<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanOrganisasi extends Model
{
    use HasFactory;

    protected $table = 'pengalaman_organisasi';

    protected $fillable = [
        'organisasi_id',
        'keterangan'
    ];

    public function organisasi(){
        return $this->belongsTo(Organisasi::class);
    }
}
