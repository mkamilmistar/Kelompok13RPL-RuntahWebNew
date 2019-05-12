<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class wilayah extends Model
{
    protected $table = 'wilayah';

    protected $fillable = [
        'kabupaten', 'kecamatan', 'date', 'time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
