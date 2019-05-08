<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subdistrict;

class District extends Model
{

    protected $table = 'districts';

    protected $fillable = [
        'kabupaten', 'kabupaten_id'
    ];

    public function subdistrict()
    {
        return $this->hasMany(Subdistrict::class);
    }
}
