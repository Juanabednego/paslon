<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    use HasFactory;

    protected $table = 'official';

    protected $fillable = [
            'gambar',
            'alamat',
            'nomor_telepon',
            'email',
            'twitter',
            'facebook',
            'youtube',
            'instagram',
            'linkedin',
    ];
}
