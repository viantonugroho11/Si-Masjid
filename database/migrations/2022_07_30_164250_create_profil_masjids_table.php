<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilMasjidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_masjids', function (Blueprint $table) {
            $table->id();
            $table->string('logo_masjid');
            $table->string('nama_masjid');
            $table->string('alamat_masjid');
            $table->string('telepon_masjid');
            $table->string('email_masjid');
            $table->string('instagram_masjid');
            $table->string('facebook_masjid');
            $table->string('youtube_masjid');
            $table->string('sejarah_masjid');
            $table->string('visi_masjid');
            $table->string('misi_masjid');
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
        Schema::dropIfExists('profil_masjids');
    }
}
