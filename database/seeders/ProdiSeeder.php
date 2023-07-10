<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('prodis')->insert([
            'kode' => '09',
            'nama_prodi' => 'Informatika'
        ]);
        DB::table('prodis')->insert([
            'kode' => '10',
            'nama_prodi' => 'Sains Data'
        ]);
    }
}
