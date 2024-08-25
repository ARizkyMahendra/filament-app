<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    public $timestamps = true;
    protected $fillable = [
        'nama',
        'phone',
        'alamat',
        'date_join',
        'note',
        'paket_id',
        'harga',
        'status',
    ];

    public function paket(): BelongsTo
    {
        return $this->belongsTo(Paket::class);
    }
}
