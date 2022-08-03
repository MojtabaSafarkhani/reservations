<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Hotel\UpdateHotelRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelAdminController extends Controller
{
    public function index()
    {
        return view('admin.hotels.index', [

            'hotels' => Hotel::query()->paginate(4),

        ]);

    }

    public function accept(Request $request)
    {
        $hotel = Hotel::query()
            ->where('id', $request->get('hotelId'))->firstOrFail();

        $hotel->update([
            'is_published' => 'ok',
        ]);

        return response()->json([
            'message' => 'ok',
            'hotel' => $hotel
        ]);
    }

    public function edit(Hotel $hotel)
    {
        return view('admin.hotels.edit', [

            'categories' => Category::all(),
            'cities' => City::query()->where('city_id', '!=', null)->get(),
            'hotel' => $hotel,

        ]);
    }

    public function update(Hotel $hotel, UpdateHotelRequest $request)
    {

        if ($this->notZeroAndAnyCapacity($request)) {

            return redirect((route('admin.hotel.edit', $hotel)))
                ->withErrors(['capacity' => 'امکان انتخاب همزمان (هيچ کدام) با باقي ظرفيت ها فراهم نيست!'])
                ->withInput();
        }

        $host = $hotel->host;

        if ($this->getNameHotelIsExistsForUpdate($request, $hotel, $host)) {

            return redirect()->back()->withErrors(['name' => 'این نام قبلا توسط شما انتخاب شده است!'])->withInput();
        }

        $path = $this->uploadLicense($request, $hotel);

        $hotel->update([

            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'category_id' => $request->get('category_id'),
            'city_id' => $request->get('city_id'),
            'cost' => $request->get('cost'),
            'description' => $request->get('description'),
            'address' => $request->get('address'),
            'capacity' => $request->get('capacity'),
            'license' => $path,

        ]);

        return redirect(route('hotels.index'));
    }

    public function reject(Request $request)
    {
        $hotel = Hotel::query()
            ->where('id', $request->get('hotelId'))->firstOrFail();

        $hotel->update([
            'is_published' => 'nok',
        ]);

        return response()->json([
            'message' => 'ok',
            'hotel' => $hotel
        ]);
    }

    public function show(Hotel $hotel)
    {
        return view('admin.hotels.show', [

            'hotel' => $hotel

        ]);
    }

    public function download(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'path' => ['required']
        ]);

        if ($validate->fails()) {
            return redirect(route('hotels.index'));
        }

        $photo = $request->get('path');
        $photo = str_replace('public', 'storage', $photo);
        $array = explode('.', $photo);
        $ext = end($array);
        $path = public_path() . "/" . $photo;

        if (!file_exists($path)) {

            return redirect()->back();

        }

        $name = Carbon::now() . "." . $ext;
        return response()->download($path, $name);
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function notZeroAndAnyCapacity(Request $request): bool
    {
        return collect($request->get('capacity'))->contains(0) &&
            collect($request->get('capacity'))->hasAny([1, 2, 3, 4, 5, 6, 7]);
    }

    /**check for unique name for hotel in one city and one host in update
     * @param Request $request
     * @param Hotel $hotel
     * @param $host
     * @return bool
     */
    public function getNameHotelIsExistsForUpdate(Request $request, Hotel $hotel, $host): bool
    {
        return Hotel::query()->where('name', $request->get('name'))
            ->where('id', '!=', $hotel->id)
            ->where('host_id', $host->id)
            ->where('city_id', $request->get('city_id'))->exists();
    }

    /**
     *
     * @param Request $request
     * @param Hotel $hotel
     * @return string
     */
    public function uploadLicense(Request $request, Hotel $hotel): string
    {
        if ($request->hasFile('license')) {

            $path = $request->file('license')->storePublicly('public/images/license');

        } else {
            $path = $hotel->license;
        }

        return $path;
    }

    public function destroy(Hotel $hotel)
    {
        session()->flash('success',"اقامتگاه
         $hotel->name
           با موفقیت حذف شد!
           ");

        $hotel->delete();



        return redirect(route('hotels.index'));

    }
}
