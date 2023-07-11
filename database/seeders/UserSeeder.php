<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Prodi;
use App\Models\Alumni;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Date;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [

                [
                    'nim' => '1234567890',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                    'status' => 'aktif',
                    'jenis' => 'administrator',
                ],
                [
                    'nim' => '1234567891',
                    'email' => 'admin_prodi@admin.com',
                    'password' => bcrypt('password'),
                    'status' => 'aktif',
                    'jenis' => 'admin_prodi',
                ],
                [
                    'nim' => '1234567892',
                    'email' => 'user@user.com',
                    'password' => bcrypt('password'),
                    'status' => 'aktif',
                    'jenis' => 'alumni',
                ]
            ]
        );

        $user = User::where('nim', '1234567892')->first();
        $prodi = Prodi::create([
            'kode' => '05',
            'nama_prodi' => 'Teknik Informatika',
        ]);

        Alumni::create([
            'id_user' => $user->id,
            'nama' => '',
            'nik' => '',
            'tempat_lahir' => '',
            'tgl_lahir' => Date::now(),
            'nomor_wa' => '',
            'agama' => '',
            'jenis_kelamin' => '',
            'alamat' => '',
            'kota' => '',
            'provinsi' => '',
            'kode_pos' => '',
            'rt' => '',
            'rw' => '',
            'kelurahan' => '',
            'kecamatan' => '',
            'kode_prodi' => $prodi->kode,
        ]);
    }
}
