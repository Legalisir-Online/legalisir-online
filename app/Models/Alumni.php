<?php

namespace App\Models;
// namespace App;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{

    protected $table = 'alumnis';
    protected $fillable = [
        'id_user',
        'nama',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'nomor_wa',
        'agama',
        'jenis_kelamin',
        'alamat',
        'kota', '
        provinsi',
        'kode_pos',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kode_prodi'
    ];

    public static function getAllAlumni()
    {
        return self::all();
    }

    public static function tambahDataAlumni($data)
    {
        return self::create($data);
    }

    public function deleteDataAlumni($id)
    {
        $alumni = Alumni::find($id);

        if (!$alumni) {
            return response()->json(['message' => 'Alumni not found'], 404);
        }

        $alumni->delete();

        return response()->json(['message' => 'Alumni deleted successfully'], 200);
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class);
    }

    use HasFactory;
}