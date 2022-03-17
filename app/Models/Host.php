<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['status_translate'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getImageUrlAttribute()
    {
        return str_replace('public', '/storage', $this->national_card_photo);

    }

    public function getStatusTranslateAttribute()
    {
        if ($this->status === 'wait') {

            $status = "در انتظار تایید";

        } elseif ($this->status === 'ok') {

            $status = "تاييد شده";
        } else {

            $status = "رد شده";
        }

        return $status;
    }
}
