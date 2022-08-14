<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penguruses', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama_lengkap');
            $table->string('alamat_lengkap');
            $table->string('jenis_kelamin');
            $table->integer('nomor_telepon');
            $table->string('jabatan_kepengurusan');
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
        Schema::dropIfExists('data_penguruses');
    }
}
