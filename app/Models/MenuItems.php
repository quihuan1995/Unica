<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    use HasFactory;
        protected $table = 'menu_items';
    protected $fillable = [
        'menu_id','title','link','icon','parent_id'
    ];
    public function childrend()
    {
        return $this->hasMany('App\Models\MenuItems','parent_id', 'id')->with("childrend");
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

}
