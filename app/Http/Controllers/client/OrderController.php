<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Order\CreateOrderRequest;
use App\Models\Hotel;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;


class OrderController extends Controller
{


    public function store(Hotel $hotel, CreateOrderRequest $request)
    {

        $check_in = $this->getDateInEnglish($request->get('check_in'));

        $check_out = $this->getDateInEnglish($request->get('check_out'));

        $total_days = Carbon::parse($check_in)->diffInDays($check_out);

        Order::query()->create([
            'user_id' => auth()->user()->id,
            'hotel_id' => $hotel->id,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'total_person' => $request->get('total_person'),
            'total_cost' => $total_days * $hotel->cost,
        ]);

        return back();

    }

    /**
     * @param Request $request
     * @return string
     */
    public function getDateInEnglish($string): string
    {
        $date = explode('/', $this->toEngNumbers($string));

        $date = implode('/', Verta::getGregorian($date[0], $date[1], $date[2]));

        return $date;
    }

    function toEngNumbers($string)
    {

        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        $convertedPersianNums = str_replace($persian, $english, $string);

        return $convertedPersianNums;
    }
}
