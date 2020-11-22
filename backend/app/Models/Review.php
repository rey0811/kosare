<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'futsal_id',
        'date',
        'star',
        'content',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function futsal()
    {
        return $this->belongsTo('App\Models\Futsal');
    }

}
