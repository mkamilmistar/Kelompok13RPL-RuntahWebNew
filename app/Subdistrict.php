<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    protected $fillable = [
        'kecamatan_id', 'kecamatan', 'date', 'time'
    ];

    public function district()
    {
        $this->belongsTo(District::class);
    }
}
