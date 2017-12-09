<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicCostume extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'topic_costumes';
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
        'topic_id',
        'costume_id'
    ];

    public function topics()
    {
        return $this->belongsTo(Topic::class);
    }

    public function costumes()
    {
        return $this->belongsTo(Costume::class);
    }
}
