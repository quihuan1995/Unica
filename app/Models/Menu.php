<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [
        'name','slug'
    ];
    public function items()
    {
        return $this->hasMany(MenuItems::class,'menu_id','id');
    }
    public function menuLocation()
    {
        return $this->hasMany(MenuLocation::class,'menu_id','id');
    }

}