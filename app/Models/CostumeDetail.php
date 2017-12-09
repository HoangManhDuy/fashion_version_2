<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CostumeDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'costume_details';
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
        'costume_id',
        'product_id',
        'favorite_id'
    ];

    public function costumes()
    {
        return $this->belongsTo(Costume::class);
    }

    public function favorite_products()
    {
        return $this->belongsTo(FavoriteProduct::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
