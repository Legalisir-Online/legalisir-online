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
                    'id' => 1,
                    'nim' => 'M0520001',
                    'email' => 'coba1@gmail.com',
                    'email_verified_at' => '2023-07-10 00:21:35',
                    'password' => bcrypt('12345678'),
                    'remember_token' => NULL,
                    'created_at' => '2023-07-10 00:21:35',
                    'updated_at' => '2023-07-10 00:21:35',
                    'status' => 'aktif',
                    'jenis' => 'administrator'
                ],
                [
                    'id' => 2,
                    'nim' => 'M0520002',
                    'email' => 'coba2@gmail.com',
                    'email_verified_at' => '2023-07-10 00:21:35',
                    'password' => bcrypt('12345678'),
                    'remember_token' => NULL,
                    'created_at' => '2023-07-10 00:21:35',
                    'updated_at' => '2023-07-10 00:21:35',
                    'status' => 'aktif',
                    'jenis' => 'admin_prodi'
                ],
                [
                    'id' => 3,
                    'nim' => 'M0520003',
                    'email' => 'coba3@gmail.com',
                    'email_verified_at' => '2023-07-10 00:21:35',
                    'password' => bcrypt('12345678'),
                    'remember_token' => NULL,
                    'created_at' => '2023-07-10 00:21:35',
                    'updated_at' => '2023-07-10 00:21:35',
                    'status' => 'aktif',
                    'jenis' => 'alumni'
                ],
                [
                    'id' => 4,
                    'nim' => 'M0520004',
                    'email' => 'coba4@gmail.com',
                    'email_verified_at' => '2023-07-10 00:21:35',
                    'password' => bcrypt('12345678'),
                    'remember_token' => NULL,
                    'created_at' => '2023-07-10 00:21:35',
                    'updated_at' => '2023-07-10 00:21:35',
                    'status' => 'aktif',
                    'jenis' => 'alumni'
                ],
                [
                    'id' => 5,
                    'nim' => 'M0520005',
                    'email' => 'coba5@gmail.com',
                    'email_verified_at' => '2023-07-10 00:21:35',
                    'password' => bcrypt('12345678'),
                    'remember_token' => NULL,
                    'created_at' => '2023-07-10 00:21:35',
                    'updated_at' => '2023-07-10 00:21:35',
                    'status' => 'aktif',
                    'jenis' => 'alumni'
                ],
            ]
        );
    }
}
