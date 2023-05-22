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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('namaPK');
            $table->text('alamatPK')->nullable();
            $table->string('no_uji')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->date('tgl_sertifikat')->nullable();
            $table->date('masa_berlaku')->nullable();
            $table->string('no_reg_kendaraan')->nullable();
            $table->string('no_rangk_kendaraan')->nullable();
            $table->string('no_mtr_penggerak')->nullable();
            $table->string('jenis')->nullable();
            $table->string('tipe')->nullable();
            $table->string('tahun_pemb')->nullable();
            $table->string('bahan_bakar')->nullable();
            $table->string('isi_silinder')->nullable();
            $table->string('daya_motor')->nullable();
            $table->string('ukuran_ban')->nullable();
            $table->string('konfigurasi_sumbu')->nullable();
            $table->string('berat_kosong_kendaraan')->nullable();
            $table->string('panjang')->nullable();
            $table->string('lebar')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('julur_dpn')->nullable();
            $table->string('julur_blk')->nullable();
            $table->string('sumbu_i_ii')->nullable();
            $table->string('sumbu_ii_iii')->nullable();
            $table->string('sumbu_iii_iv')->nullable();
            $table->string('plt')->nullable();
            $table->string('jbb')->nullable();
            $table->string('jbi')->nullable();
            $table->string('daya_angkut')->nullable();
            $table->string('kls_jalan')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
};
