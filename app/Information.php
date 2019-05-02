<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public $table = "information";
    protected $fillable = [
        'kecamatan', 'date', 'time',
    ];
}
