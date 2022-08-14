<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKampanye extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kategori','nama_kampanye', 'foto_kampanye', 'deskripsi_kampanye', 'harga', 'status'
    ];
}
