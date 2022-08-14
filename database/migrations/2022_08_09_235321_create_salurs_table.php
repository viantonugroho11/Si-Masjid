<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salurs', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_salur');
            $table->string('tanggal_salur');
            $table->string('jumlah_salur');
            $table->string('deskripsi_salur');
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
        Schema::dropIfExists('salurs');
    }
}
