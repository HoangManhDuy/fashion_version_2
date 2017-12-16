<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';
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
        'costume_id',
        'content'
    ];

    public function costumes()
    {
        return $this->belongsTo(Costume::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
