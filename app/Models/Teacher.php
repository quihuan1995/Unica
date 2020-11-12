<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'user_id',
        'course_id',
        'description',
        'status'
        ];
    public function course(){
        return $this->hasMany('App\Models\Course');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
