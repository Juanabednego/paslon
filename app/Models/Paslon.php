<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $table = 'paslons';

    protected $fillable = [
        'nama',
        'calon_role',
        'foto',
        'deskripsi',
        'tanggal_lahir',
        'tempat_lahir',
        'nomor_hp',
        'alamat',
        'degree',
        'email',
        'agama',
        'facebook',
        'twitter',
        'instagram',
        'skype',
        'linkedin',
    ];

    public function karirs(){
        return $this->hasMany(Karir::class);
    }

    public function educations(){
        return $this->hasMany(Education::class);
    }
    
    public function organisasis(){
        return $this->hasMany(Organisasi::class);
    }
    
}
