<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
     use HasFactory; 
    protected $table = 'orders';

    
        protected $fillable = ['id', 'customer_id', 'employeed_id','order_date'];
    public $timestamps = true;
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
        public function employees()
    {
        return $this->belongsTo(Employees::class, 'employeed_id');
    }
       public function order_details()
    {
        return $this->belongsTo(Order_detail::class, 'order_id');
    }

}
