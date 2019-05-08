<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wilayah;

class event extends Model
{
    public function subdistrict()
    {
        return $this->belongsTo(Wilayah::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
