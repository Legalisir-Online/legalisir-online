<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('nama', 200);
            $table->string('nik', 25);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('nomor_wa', 20);
            $table->string('agama', 20);
            $table->char('jenis_kelamin', 1);
            $table->string('alamat', 200);
            $table->string('kota', 20)->nullable();
            $table->string('provinsi', 20)->nullable();
            $table->string('kode_pos', 8);
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('kelurahan', 20);
            $table->string('kecamatan', 20);
            $table->string('kode_prodi', 2);
            $table->foreign('kode_prodi')->references('kode')->on('prodis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};