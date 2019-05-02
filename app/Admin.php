<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'admin_id', 'role', 'username', 'password', 'email', 'jenis_kelamin'
    ];

    public function useres()
    {
        return $this->hasMany(User::class);
    }
}
