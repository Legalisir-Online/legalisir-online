<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                    'jenis' => 'admin_prodi',
                ],
                [
                    'nim' => '1234567891',
                    'email' => 'admin_prodi@admin.com',
                    'password' => bcrypt('password'),
                    'status' => 'aktif',
                    'jenis' => 'administrator',
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
    }
}
