<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengurus extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'foto','nama_lengkap', 'alamat_lengkap', 'jenis_kelamin', 'nomor_telepon', 'jabatan_kepengurusan'
    ];
}
