<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory; 
    protected $table = 'products';

    
        protected $fillable = ['productname', 'supplier_id'];
    public $timestamps = true;

     public function supplier()
    {
        return $this->belongsTo(Suplier::class, 'supplier_id');
    }
    

    
}
