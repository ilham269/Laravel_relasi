<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murids';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'agama',
        'alamat',
        'email',
    ];

    public $timestamps = true;
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }   
}
