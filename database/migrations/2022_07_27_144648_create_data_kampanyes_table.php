<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKampanyesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kampanyes', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('nama_kampanye');
            $table->string('foto_kampanye');
            $table->string('deskripsi_kampanye');
            $table->string('harga');
            $table->string('status');
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
        Schema::dropIfExists('data_kampanyes');
    }
}
