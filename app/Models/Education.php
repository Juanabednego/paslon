<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'paslon_id',
        'program_studi',
        'tahun_mulai',
        'tahun_selesai',
        'kampus',
        'keterangan'
    ];

    public function paslon(){
        return $this->belongsTo(Paslon::class);
    }
}
