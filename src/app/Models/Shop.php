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

    public function area_relation()
    {
        return $this->belongsTo(Area::class);
    }

    public function genre_relation()
    {
        return $this->belongsTo(Genre::class);
    }
}
