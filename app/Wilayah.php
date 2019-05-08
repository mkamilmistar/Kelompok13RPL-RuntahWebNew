<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    protected $table = 'wilayah';

    protected $fillable = [
        'kabupaten', 'kecamatan', 'date', 'time'
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
