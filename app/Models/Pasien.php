<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'ktp',
        'tanggal_lahir',
        'jk',
        'agama',
        'pekerjaan',
        'goldar',
        'pendidikan',
        'no_hp',
        'email',
        'pernikahan',
        'alamat',
    ];
}
