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
        Schema::create('penindakans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_id');
            $table->foreignId('user_id');
            $table->foreignId('pendataan_id');
            $table->string('jns_pelanggaran');
            $table->string('jns_penindakan');
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
        Schema::dropIfExists('penindakans');
    }
};
