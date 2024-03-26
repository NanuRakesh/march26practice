<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    // public function order(){
    //     return $this->belongsTo(Order::class);


    public function user(){
        return $this->belongsTo(User::class);
}
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function order(){
        return $this->hasOne(Order::class);
    }
}