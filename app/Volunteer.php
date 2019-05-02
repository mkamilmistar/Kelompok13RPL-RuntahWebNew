<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'role', 'jenis_kelamin', 'point', 'volunteer_id', 'pasword', 'email'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
