<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'post_id', 'image', 'linkvideo', 'date', 'time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
