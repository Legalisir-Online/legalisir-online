<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
=======
use App\Models\User;
use App\Models\Prodi;
use App\Models\Alumni;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Date;
>>>>>>> b2cbbe3080393b0413083f29b2464604ecb27434

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        DB::table('users')->insert([
            'id' => 1,
            'nim' => 'M0520001',
            'email' => 'coba1@gmail.com',
            'email_verified_at' => '2023-07-10 00:21:35',
            'password' => '12345678',
            'remember_token' => NULL,
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35',
            'status' => 'aktif',
            'jenis' => 'administrator'
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'nim' => 'M0520002',
            'email' => 'coba2@gmail.com',
            'email_verified_at' => '2023-07-10 00:21:35',
            'password' => '12345678',
            'remember_token' => NULL,
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35',
            'status' => 'aktif',
            'jenis' => 'admin_prodi'
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'nim' => 'M0520003',
            'email' => 'coba3@gmail.com',
            'email_verified_at' => '2023-07-10 00:21:35',
            'password' => '12345678',
            'remember_token' => NULL,
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35',
            'status' => 'aktif',
            'jenis' => 'alumni'
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'nim' => 'M0520004',
            'email' => 'coba4@gmail.com',
            'email_verified_at' => '2023-07-10 00:21:35',
            'password' => '12345678',
            'remember_token' => NULL,
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35',
            'status' => 'aktif',
            'jenis' => 'alumni'
        ]);
        DB::table('users')->insert([
            'id' => 5,
            'nim' => 'M0520005',
            'email' => 'coba5@gmail.com',
            'email_verified_at' => '2023-07-10 00:21:35',
            'password' => '12345678',
            'remember_token' => NULL,
            'created_at' => '2023-07-10 00:21:35',
            'updated_at' => '2023-07-10 00:21:35',
            'status' => 'aktif',
            'jenis' => 'alumni'
=======
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
>>>>>>> b2cbbe3080393b0413083f29b2464604ecb27434
        ]);
    }
}
