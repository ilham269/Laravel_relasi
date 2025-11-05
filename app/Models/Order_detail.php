<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order_detail extends Model
{
     use HasFactory; 
  protected $table = 'order_details';
 
     protected $fillable = ['id','order_id', 'product_id', 'unit_price','qty'];
    public $timestamps = true;

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
     public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

}