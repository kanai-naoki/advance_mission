<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id',
        'evaluation',
        'comment'
    ];

    public function users_relation()
    {
        return $this->belongs(User::class);
    }

    public function shops_relation()
    {
        return $this->belongs(Shops::class);
    }
}
