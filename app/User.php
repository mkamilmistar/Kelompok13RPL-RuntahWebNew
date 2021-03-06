<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Event;
use App\Wilayah;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'username', 'email', 'password',
        'nama_depan', 'nama_belakang', 'jenis_kelamin',
        'alamat', 'user_image', 'point'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function report()
    {
        return $this->hasMany(Report::class);
        return $this->hasMany(Post::class);
    }

    public function wilayah()
    {
        return $this->hasMany(Wilayah::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
