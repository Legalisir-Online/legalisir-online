<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('alumnis')->insert([
            'id' => 1,
            'id_user' => 3,
            'nama' => 'John Doe',
            'nik' => '33102357000000',
            'tempat_lahir' => 'Solo',
            'tgl_lahir' => '2000-01-01',
            'nomor_wa' => '085123456789',
            'agama' => 'Islam',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Ir. Sutami, Kentingan, Jebres, Surakarta',
            'kota' => 'Surakarta',
            'provinsi' => 'Jawa Tengah',
            'kode_pos' => '57555',
            'rt' => '001',
            'rw' => '002',
            'kelurahan' => 'Jebres',
            'kecamatan' => 'Jebres',
            'kode_prodi' => '09',
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35'
        ]);
        DB::table('alumnis')->insert([
            'id' => 2,
            'id_user' => 3,
            'nama' => 'Budi',
            'nik' => '33102357000000',
            'tempat_lahir' => 'Solo',
            'tgl_lahir' => '2000-01-01',
            'nomor_wa' => '085123456789',
            'agama' => 'Islam',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Ir. Sutami, Kentingan, Jebres, Surakarta',
            'kota' => 'Surakarta',
            'provinsi' => 'Jawa Tengah',
            'kode_pos' => '57555',
            'rt' => '001',
            'rw' => '002',
            'kelurahan' => 'Jebres',
            'kecamatan' => 'Jebres',
            'kode_prodi' => '09',
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35'
        ]);
        DB::table('alumnis')->insert([
            'id' => 3,
            'id_user' => 3,
            'nama' => 'John Sohn',
            'nik' => '33102357000000',
            'tempat_lahir' => 'Solo',
            'tgl_lahir' => '2000-01-01',
            'nomor_wa' => '085123456789',
            'agama' => 'Islam',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Ir. Sutami, Kentingan, Jebres, Surakarta',
            'kota' => 'Surakarta',
            'provinsi' => 'Jawa Tengah',
            'kode_pos' => '57555',
            'rt' => '001',
            'rw' => '002',
            'kelurahan' => 'Jebres',
            'kecamatan' => 'Jebres',
            'kode_prodi' => '09',
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35'
        ]);
        DB::table('alumnis')->insert([
            'id' => 4,
            'id_user' => 3,
            'nama' => 'Sinta',
            'nik' => '33102357000000',
            'tempat_lahir' => 'Solo',
            'tgl_lahir' => '2000-01-01',
            'nomor_wa' => '085123456789',
            'agama' => 'Islam',
            'jenis_kelamin' => 'P',
            'alamat' => 'Jl. Ir. Sutami, Kentingan, Jebres, Surakarta',
            'kota' => 'Surakarta',
            'provinsi' => 'Jawa Tengah',
            'kode_pos' => '57555',
            'rt' => '001',
            'rw' => '002',
            'kelurahan' => 'Jebres',
            'kecamatan' => 'Jebres',
            'kode_prodi' => '09',
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35'
        ]);
        DB::table('alumnis')->insert([
            'id' => 5,
            'id_user' => 3,
            'nama' => 'Ayu Putri',
            'nik' => '33102357000000',
            'tempat_lahir' => 'Solo',
            'tgl_lahir' => '2000-01-01',
            'nomor_wa' => '085123456789',
            'agama' => 'Islam',
            'jenis_kelamin' => 'P',
            'alamat' => 'Jl. Ir. Sutami, Kentingan, Jebres, Surakarta',
            'kota' => 'Surakarta',
            'provinsi' => 'Jawa Tengah',
            'kode_pos' => '57555',
            'rt' => '001',
            'rw' => '002',
            'kelurahan' => 'Jebres',
            'kecamatan' => 'Jebres',
            'kode_prodi' => '09',
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35'
        ]);
    }
}
