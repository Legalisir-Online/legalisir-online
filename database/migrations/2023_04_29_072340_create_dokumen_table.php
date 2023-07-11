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
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumni_id');
            $table->foreign('alumni_id')->references('id')->on('alumnis');
            $table->string('path', 300);
            $table->string('nama', 100);
            $table->set('status', ['Pass', 'Fail', 'Menunggu', 'Valid', 'Invalid'])->nullable();
            $table->string('keterangan', 100)->nullable();
            $table->set('jenis', ['Ijazah', 'Transkrip']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};