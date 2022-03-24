<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Host;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function host()
    {
        return $this->belongsTo(Host::class);
    }
}
