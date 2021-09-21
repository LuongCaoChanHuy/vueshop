<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Product extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = [
        'id','name','author_id','category_id','price','status','quantity','image','created_at','updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
