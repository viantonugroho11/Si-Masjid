<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKegiatan extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */ 
    protected $fillable = [
        'nama_kegiatan',
        'hari_kegiatan',
        'waktu_kegiatan',
        'deskripsi_kegiatan'
    ];
}
