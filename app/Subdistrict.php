<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;
use App\District;


class Subdistrict extends Model
{

    protected $table = 'subdistricts';

    protected $fillable = [
        'kecamatan_id', 'kecamatan', 'date', 'time'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'kecamatan_id');
    }
    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
