<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subdistrict;

class event extends Model
{
    public function subdistrict()
    {
        $this->belongsTo(Subdistrict::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
