<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{

    protected $table = 'dokumens';

    protected $fillable = [
        'id',
        'alumni_id',
        'path',
        'nama',
        'status',
        'keterangan',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
