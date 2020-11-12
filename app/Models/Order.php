<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'customer_id','full_name','address','email','phone','status','payment_method'
    ];
    public function Customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
    public function OrderItems()
    {
        return $this->hasMany('App\Models\OrderItems', 'order_id', 'id');
    }
}