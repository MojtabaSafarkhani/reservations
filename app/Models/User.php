<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function host()
    {
        return $this->hasOne(Host::class, 'user_id');
    }

    public function likes()
    {
        return $this->belongsToMany(Hotel::class, 'likes');
    }

    public function likeHotel(Hotel $hotel)
    {
        $hotelIsLiked = $this->likes()->where('id', $hotel->id)->exists();

        if ($hotelIsLiked) {
            return $this->likes()->detach($hotel);
        }
        return $this->likes()->attach($hotel);
    }


}
