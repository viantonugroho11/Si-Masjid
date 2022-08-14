<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'jenis_pengeluaran',
        'jumlah_pengeluaran',
        'tanggal_pengeluaran',
        'deskripsi_pengeluaran',
        'bukti_pengeluaran'
    ];
}
