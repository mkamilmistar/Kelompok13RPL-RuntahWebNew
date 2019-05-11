<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'kabupaten', 'kecamatan', 'date', 'time', 'location', 'status'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
