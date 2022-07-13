<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reserve extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['order.user'];

    public function getRouteKeyName()
    {
        return 'u_string';
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getStatusTranslateAttribute()
    {

        if ($this->status == 'wait') {

            $translate = ['message' => 'در انتظار پرداخت', 'color' => 'bg-warning'];

        } elseif ($this->status == 'ok') {

            $translate = ['message' => 'پرداخت شده', 'color' => 'bg-success'];

        } else {

            $translate = ['message' => 'پرداخت ناموفق', 'color' => 'bg-danger'];
        }

        return $translate;
    }


}
