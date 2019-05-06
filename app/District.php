<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'kabupaten', 'kabupaten_id'
    ];

    public function subdistrict()
    {
        $this->hasMany(Subdistrict::class);
    }
}