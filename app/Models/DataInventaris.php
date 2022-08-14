<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataInventaris extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_barang','jenis_barang', 'kode_barang', 'jumlah', 'satuan', 'kondisi_barang', 'tanggal_pembelian_barang', 'keterangan'
    ];
}
