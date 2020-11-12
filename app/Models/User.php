<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
////// user có nhiều role
    public function hasAnyRoles($roles)
    {
        if($this->roles->whereIn('title',$roles)->first())
            return true;
        return false;
    }
////// user có 1 role
    public function hasRole($role)
    {
        if($this->roles->where('title',$role)->first())
            return true;
        return false;
    }

    public function hasAnyPermissions($permissions)
    {

        if($this->roles->whereIn('permissions',$permissions)->first())
            return true;
        return false;
    } 
    public function teacher()
    {
        return $this->hasOne('App\Model\Teacher');
    }
}
