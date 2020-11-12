<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = [
        'course_id','order_id','voucher_id','status','total_price'
    ];
    public function Voucher()
    {
        return $this->belongsTo('App\Models\Voucher', 'voucher_id', 'id');
    }
    public function Order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id', 'id');
    }
    public function Course()
    {
        return $this->belongsToMany('App\Models\Course', 'course_id', 'id');
    }
}