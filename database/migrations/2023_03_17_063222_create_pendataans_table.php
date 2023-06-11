<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendataans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_id');
            $table->foreignId('user_id');
            $table->integer('berat');
            $table->string('kbbk');
            $table->string('kbbp');
            $table->string('panjang');
            $table->string('kel_panjang');
            $table->string('lebar');
            $table->string('kel_lebar');
            $table->string('tinggi');
            $table->string('kel_tinggi');
            $table->string('foh');
            $table->string('kel_foh');
            $table->string('roh');
            $table->string('kel_roh');
            $table->string('mengangkut');
            $table->string('dari');
            $table->string('tujuan');
            $table->string('pengemudi');
            $table->string('sim');
            $table->string('kelengkapan_berkas');
            $table->string('pelanggaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendataans');
    }
};
