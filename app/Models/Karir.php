<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    use HasFactory;

    protected $table = 'karirs';

    protected $fillable = [
        'paslon_id',
        'keterangan',
        'tempat',
    ];

    public function paslon(){
        return $this->belongsTo(Paslon::class);
    }
}
