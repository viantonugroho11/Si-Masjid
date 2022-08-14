<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilMasjid extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'logo_masjid',
        'nama_masjid',
        'alamat_masjid',
        'telepon_masjid',
        'email_masjid',
        'instagram_masjid',
        'facebook_masjid',
        'youtube_masjid',
        'sejarah_masjid',
        'visi_masjid',
        'misi_masjid'
    ];
}
