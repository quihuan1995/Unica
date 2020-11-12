<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'title','slug','description','regular_price','sale_price_date_from','sale_price_date_to','will_be_learning',
        'short_description','thumbnail','video_intro','sale_price','total_rate','category_id '];
    public function category()
    {
        return $this->belongsToMany('App\Models\Category', 'category_id', 'id');
    }
     public function customer(){
        return $this->belongsToMany('App\Models\Customer', 'customer_course', 'course_id', 'customer_id');
    }
    public function customerWishlist(){
        return $this->belongsToMany('App\Models\Customer', 'customer_wishlist', 'course_id', 'customer_id');
    }
    public function teacher(){
        return $this->belongsTo('App\Models\Teacher','teacher_id','id');
    }
}