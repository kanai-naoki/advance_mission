<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'area_id', 
        'genre_id', 
        'shop_detail',
        'shop_image'
    ];

    public function books_relation()
    {
        return $this->hasmany(Book::class);
    }

    public function favorites_relation()
    {
        return $this->hasmany(Favorite::class);
    }

    public function areas_relation()
    {
        return $this->belongsTo(Area::class);
    }

    public function genres_relation()
    {
        return $this->belongsTo(Genre::class);
    }

    public function reviews_relation()
    {
        return $this->hasmany(Review::class);
    }

    public function orners_relation()
    {
        return $this->hasone(Orner::class);
    }
}
