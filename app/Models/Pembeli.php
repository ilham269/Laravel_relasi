<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembelis';

    protected $fillable = [
        'nama_pembeli',
        'jenis_kelamin',
        'no_telepon',
    ];
     public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pembeli');
    } 
}
