<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Product extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = [
        'id','name','author','price','status','quantity','image','created_at','updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }
    public function order_details()
    {
        return $this->hasMany(OrderDetail::class,'products_id','id');
    }
    public function images()
    {
        return $this->hasMany(Image::class,'products_id','id');
    }
}
