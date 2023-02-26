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
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('nomor_induk_penduduk')->after('name')->nullable();
            $table->string('file_ktp')->nullable()->after('nomor_induk_penduduk');
            $table->string('file')->nullable()->after('file_ktp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nomor_induk_penduduk');
            $table->dropColumn('file_ktp');
            $table->dropColumn('file');
        });
    }
};
