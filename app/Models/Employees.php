<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employees extends Model
{
     use HasFactory; 
    protected $table = 'Employees';

    
        protected $fillable = ['id', 'lastname', 'firstname','birthdate','address'];
    public $timestamps = true;
}
