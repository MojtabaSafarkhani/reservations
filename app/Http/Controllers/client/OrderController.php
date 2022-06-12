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


    public function index()
    {
        $orders = auth()->user()->orders;


        return view('client.orders.index',[
            'orders'=>$orders,
        ]);
    }


    public function store(Hotel $hotel, CreateOrderRequest $request)
    {
        if ($this->getExistsOrder($hotel)) {

            return redirect()->back()->withErrors(['total_person' => "درخواست شما قبلا ثبت شده است لطفا منتظر بمانيد!"]);
        }


        $check_in = $this->getDateInEnglish($request->get('check_in'));

        $check_out = $this->getDateInEnglish($request->get('check_out'));

        $total_days = Carbon::parse($check_in)->diffInDays($check_out);

        $afterOrBefore = Carbon::parse($check_in)->isBefore($check_out);

        if (!$afterOrBefore) {

            return redirect()->back()->withErrors(['check_out' => "روز خروج بايد بعد از روز ورود باشد!"]);

        }


        Order::query()->create([
            'user_id' => auth()->user()->id,
            'hotel_id' => $hotel->id,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'total_person' => $request->get('total_person'),
            'total_cost' => $total_days * $hotel->cost,
        ]);

        session()->flash('success', 'درخواست شما باموفقيت ثبت شد!');

        return redirect()->back();

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

    /**
     * @param Hotel $hotel
     * @return bool
     */
    public function getExistsOrder(Hotel $hotel): bool
    {
        return Order::query()->where('user_id', auth()->user()->id)
            ->where('hotel_id', $hotel->id)->where('status', 'wait')->exists();
    }
}
