<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_service extends Model
{
    use HasFactory;
  
    public function customer()
    {
        return $this->belongsTo('App\Models\User','customer_id');
    }
    
}
