<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shop_name'
    ];

    public function shops_relation()
    {
        return $this->belongsTo(Shop::class);
    }
}
