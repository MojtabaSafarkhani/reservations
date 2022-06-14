<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $appends = ['status_to_persian'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function getCheckInToPersianAttribute()
    {
        $date = explode('-', $this->check_in);

        return implode('/', Verta::getJalali($date[0], $date[1], $date[2]));
    }

    public function getCheckOutToPersianAttribute()
    {
        $date = explode('-', $this->check_out);

        return implode('/', Verta::getJalali($date[0], $date[1], $date[2]));
    }

    public function getStatusToPersianAttribute()
    {
        if ($this->status == 'ok') {

            $status = ['message' => 'تاييد شد', 'class' => 'bg-success'];

        } elseif ($this->status == 'nok') {

            $status = ['message' => 'رد شد', 'class' => 'bg-danger'];
        } else {

            $status = ['message' => 'در انتظار تاييد', 'class' => 'bg-warning'];
        }

        return $status;
    }
}
