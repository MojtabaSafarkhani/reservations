<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Order\CreateOrderRequest;
use App\Models\Hotel;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Gate;


class OrderController extends Controller
{


    public function index()
    {
        $ordersIds = auth()->user()->orders->pluck('id');

        $orders = Order::query()->whereIn('id', $ordersIds)->paginate(5);


        return view('client.orders.index', [
            'orders' => $orders,
        ]);
    }


    public function store(Hotel $hotel, CreateOrderRequest $request)
    {
        Gate::authorize('HotelIsPublishedForLike', $hotel);


        $check_in = $this->getDateInEnglish($request->get('check_in'));

        $check_out = $this->getDateInEnglish($request->get('check_out'));

        if ($this->isDayPastedOrDayEqualToDay($check_in)) {

            return redirect()->back()->withErrors(['check_in' => "روز ورود گذشته است!"]);

        }

        if ($this->getExistsOrder($hotel, $check_in, $check_out)) {

            return redirect()->back()->withErrors(['total_person' => "درخواست شما قبلا ثبت شده است لطفا منتظر بمانيد!"]);
        }

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

        session()->flash('success', 'درخواست شما باموفقيت ثبت شد در صورت تاييد، ايميل پرداخت براي شما ارسال ميشود!');

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
    public function getExistsOrder(Hotel $hotel, $check_in, $check_out): bool
    {

        return Order::query()->where('user_id', auth()->user()->id)
                ->where('hotel_id', $hotel->id)->where('status', 'wait')->exists() ||
            Order::query()->where('user_id', auth()->user()->id)
                ->where('hotel_id', $hotel->id)->where('status', 'ok')
                ->where(function ($query) use ($check_in, $check_out) {
                    $query->orWhereBetween('check_in', [$check_in, $check_out])
                        ->orWhereBetween('check_out', [$check_in, $check_out]);
                })->exists();
    }

    /**
     * @param string $check_in
     * @return bool
     */
    public function isDayPastedOrDayEqualToDay(string $check_in): bool
    {
        $today = Carbon::today()->format('Y/m/d');

        $isCheckInEqualToday = Carbon::parse($check_in)->equalTo($today);

        $isCheckInPasted = Carbon::parse($check_in)->isBefore($today);

        return $isCheckInEqualToday|| $isCheckInPasted;
    }


}
