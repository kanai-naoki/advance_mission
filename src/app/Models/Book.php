<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id',
        'book_date', 
        'book_time', 
        'number'
    ];

    public function user_relation()
    {
        return $this->belongsTo(User::class);
    }

    public function shop_relation()
    {
        return $this->belongsTo(Shop::class);
    }
}
