<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo(City::class, 'city_id');

    }

    public function towns()
    {

        return $this->hasMany(City::class, 'city_id');

    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
