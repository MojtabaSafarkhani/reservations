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
        return $this->belongsTo(__CLASS__);
    }

    public function towns()
    {

        return $this->hasMany(__CLASS__);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
