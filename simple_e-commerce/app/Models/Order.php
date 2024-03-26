<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    public function user():BelongsTo{
return $this->belongsTo(User::class);
    }
    public function orderitems(){
        return $this->hasOne(OrderItem::class);
    }
        public Function product(){
            return $this->belongsTo(Product::class);
        }
    
}
