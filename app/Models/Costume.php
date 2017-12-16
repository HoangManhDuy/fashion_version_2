<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costume extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'costumes';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'style',
        'agv_point',
        'description'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function topic_costumes()
    {
        return $this->hasMany(TopicCostume::class);
    }

    public function costume_details()
    {
        return $this->hasMany(CostumeDetail::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function favorite_costumes()
    {
        return $this->hasMany(FavoriteCostume::class);
    }
}
