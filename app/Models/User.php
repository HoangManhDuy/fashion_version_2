<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'gender',
        'role',
        'description',
        'phone',
        'address'
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

    public function follows()
    {
        return $this->hasMany(Follow::class);
    }

    public function favorite_costumes()
    {
        return $this->hasMany(FavoriteCostume::class);
    }

    public function favorite_products()
    {
        return $this->hasMany(FavoriteProduct::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function costumes()
    {
        return $this->hasMany(Costume::class);
    }
}
