<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'jenis_pemasukan','jumlah_pemasukan', 'tanggal_pemasukan', 'deskripsi_pemasukan'
    ];
}
