<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erea extends Model
{
    use HasFactory;

    protected $fillable = [
        'area'
    ];

    public function shop_relation()
    {
        return $this->hasone(Shop::class);
    }
}
