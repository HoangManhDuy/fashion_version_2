<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
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
        'name',
        'category_id',
        'color',
        'gender',
        'trademark',
        'size',
        'price',
        'description'
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function favorite_products()
    {
        return $this->hasMany(FavoriteProduct::class);
    }

    public function costume_details()
    {
        return $this->hasMany(CostumeDetail::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
