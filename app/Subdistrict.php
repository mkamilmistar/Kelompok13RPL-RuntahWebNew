<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;
use App\District;


class Subdistrict extends Model
{
    protected $fillable = [
        'kecamatan_id', 'kecamatan', 'date', 'time'
    ];

    public function district()
    {
        $this->belongsTo(District::class);
    }
    public function event()
    {
        $this->hasMany(Event::class);
    }
}
