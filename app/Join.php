<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

class Join extends Model
{
    protected $fillable = [
        'status', 'event_id', 'user_id'
    ];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
