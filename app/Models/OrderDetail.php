<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id','products_id','orders_id','price','name','quantity','status'
    ];

    public function order()
    {
        return $this->belongsTo(order::class,'orders_id','id');
    }
    public function product()
    {
        return $this->belongsTo(product::class,'products_id','id');
    }
}
