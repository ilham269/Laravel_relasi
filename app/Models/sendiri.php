<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendiri extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'jenis_kelamin', 'tanggal_lahir', 'alamat'];
    public $timestamps = true;
}
