<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Host;
use App\Models\City;
use App\Models\Category;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['is_published_translate'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function host()
    {
        return $this->belongsTo(Host::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_hotel');
    }

    public function getIsPulishedTranslateAttribute()
    {

        if ($this->is_published == 'wait') {

            $translate = ['message' => 'در انتظار تاييد', 'color' => 'bg-warning'];

        } elseif ($this->is_published == 'ok') {

            $translate = ['message' => 'تاييد شده', 'color' => 'bg-success'];

        } else {

            $translate = ['message' => 'رد شده', 'color' => 'bg-danger'];
        }

        return $translate;
    }

    public function hasFeatures(Feature $feature)
    {
        return $this->features()->where('feature_id', $feature->id)->exists();
    }
}
