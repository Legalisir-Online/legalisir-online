<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'tempat_lahir',
        'tanggal_lahir', 
        'agama',
        'nik',
        'nomor_wa',
        'jenis_kelamin', 
        'alamat',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kode_prodi',
    ];
}
