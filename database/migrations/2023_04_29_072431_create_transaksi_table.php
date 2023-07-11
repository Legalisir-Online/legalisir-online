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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumni');
            $table->foreign('id_alumni')->references('id')->on('alumnis');
            $table->unsignedBigInteger('id_dokumen');
            $table->foreign('id_dokumen')->references('id')->on('dokumens');
            $table->integer('jumlah_berkas');
            $table->integer('harga_satuan');
            $table->integer('harga_ongkir');
            $table->boolean('cetak_berkas');
            $table->boolean('pengambilan_berkas');
            $table->string('progress', 100)->default('telah dilegalisir');
            $table->boolean('status')->nullable();
            $table->boolean('pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
