<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'nama',
        'status',
        'keterangan',
        'alumni_id',
        'jenis'
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }
}
