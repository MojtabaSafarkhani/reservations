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

    protected $casts = [

        'capacity' => 'array',

    ];

    protected $appends = ['status_translate'];

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

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_hotel');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function isCapacityExists($value)
    {
        $exists = collect($this->capacity)->contains($value);

        return $exists;
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

    public function getStatusTranslateAttribute()
    {
        if ($this->is_published === 'wait') {

            $status = "در انتظار تایید";

        } elseif ($this->is_published === 'ok') {

            $status = "تاييد شده";
        } else {

            $status = "رد شده";
        }

        return $status;
    }

    public function getIsLikedAttribute()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function hasFeatures(Feature $feature)
    {
        return $this->features()->where('feature_id', $feature->id)->exists();
    }

    public function getHotelRatingAttribute()
    {
        $rating = round($this->comments->pluck('rating')->avg(),2);

        if ($rating == 0) {
            return  'امتیاز ثبت نشده است';
        }

        return $rating;
    }
}
