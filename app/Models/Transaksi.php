<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'va_number',
        'bank',
        'transaction_time',
        'transaction_status',
        'transaction_id',
        'signature_key',
        'payment_type',
        'order_id',
        'merchant_id',
        'gross_amount',
        'froud_status',
        'currency',
        'id_user',
        'id_zis',
        'type'
    ];

    public function getuser()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
    public function getzis()
    {
        return $this->belongsTo(DataKampanye::class,'id_zis','id');
    }
}
