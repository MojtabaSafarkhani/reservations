<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageUrlAttribute()
    {
        return str_replace('public', '/storage', $this->image);
    }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'feature_hotel');
    }
}
