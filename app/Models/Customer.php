<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'customers';
    protected $fillable = [
        'full_name','avatar','address','email','phone','password','birthday','gender'
    ];

    protected $hidden = [
        'password','remember_token'
    ];

    public function order()
    {
        return $this->hasMany('App\Models\Order', 'customer_id', 'id');
    }
    public function course(){
        return $this->belongsToMany('App\Models\Course', 'customer_course', 'customer_id', 'course_id');
    }
    public function wishlist(){
        return $this->belongsToMany('App\Models\Course', 'customer_wishlist', 'customer_id', 'course_id');
    }
}