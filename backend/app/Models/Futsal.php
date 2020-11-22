<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Futsal extends Model
{
    use HasFactory;

    // フットサル場とコメント：1対多
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
