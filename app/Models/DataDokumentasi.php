<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDokumentasi extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'jenis_dokumentasi','foto_dokumentasi', 'deskripsi_foto', 'tanggal_pelaksanaan'
    ];
}
