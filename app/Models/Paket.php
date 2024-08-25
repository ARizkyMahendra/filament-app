<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'pakets';
    public $timestamps = true;
    protected $fillable = [
        'nama_paket',
        'available',
        'harga',
        'deskripsi',
        'image',
    ];

    public function transaksis(){
        return $this->hasMany(Transaksi::class);
    }
}
