<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory; 
    protected $table = 'transaksis';

    protected $fillable = [
        'id_pembeli',
        'id_barang',
        'jumlah_beli',
        'total_harga',
    ];
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
        
    }
      public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
        
    }
}
