<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function products()
   {
   return $this->hasMany(Product::class);
   }
   public function users(){
      return $this->belongsToMany(User::class,'categories_users','category_id','user_id');
   }
}
