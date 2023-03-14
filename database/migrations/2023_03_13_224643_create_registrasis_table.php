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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_registrasi');
            $table->string('kode_pendaftaran');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('periode_id');
            $table->unsignedBigInteger('gelombang_id');
            $table->unsignedBigInteger('jenis_seleksi_id');
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
        Schema::dropIfExists('registrasi');
    }
};
