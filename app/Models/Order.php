<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id','method','total','created_at','updated_at'
    ];

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class,'orders_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}
