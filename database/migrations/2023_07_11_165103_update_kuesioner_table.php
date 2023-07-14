<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('kuesioners', function (Blueprint $table) {
            $table->dropColumn('periode');
            $table->date('periode_mulai')->nullable();
            $table->date('periode_selesai')->nullable();
        });
    }

    public function down()
    {
        Schema::table('kuesioners', function (Blueprint $table) {
            $table->string('periode');
            $table->dropColumn(['periode_mulai', 'periode_selesai']);
        });
    }
};