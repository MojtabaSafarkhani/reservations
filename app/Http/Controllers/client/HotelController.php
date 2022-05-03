<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckHostOkMiddleware;
use App\Http\Requests\Client\Hotel\CreateHotelRequest;
use App\Http\Requests\Client\Hotel\UpdateHotelRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Host;
use App\Models\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckHostOkMiddleware::class);


    }

    public function index()
    {

        return view('client.hotels.index', [
            'hotels' => auth()->user()->host->hotels
        ]);
    }

    public function create()
    {
        return view('client.hotels.create', [
            'categories' => Category::all(),
            'cities' => City::all(),
        ]);
    }

    public function store(CreateHotelRequest $request)
    {
        dd($request->all());
        /**
         * @var Host $host
         **/
        $host = auth()->user()->host;

        if ($this->getNameHotelIsExists($request, $host)) {

            return redirect()->back()->withErrors(['name' => 'این نام قبلا توسط شما انتخاب شده است!'])->withInput();
        }

        $path = $request->file('license')->storePublicly('public/images/license');


        $host->hotels()->create([
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

        return redirect(route('client.hotel.index'));
    }

    public function show(Hotel $hotel)
    {
        return view('client.hotels.show', [

            'hotel' => $hotel,
        ]);
    }

    public function edit(Hotel $hotel)
    {
        Gate::authorize('HotelsForRealHost', $hotel);

        $this->CheckStatusHotel($hotel);


        return view('client.hotels.edit', [

            'hotel' => $hotel,
            'categories' => Category::all(),
            'cities' => City::all(),


        ]);
    }

    public function update(Hotel $hotel, UpdateHotelRequest $request)
    {
        Gate::authorize('HotelsForRealHost', $hotel);

        $this->CheckStatusHotel($hotel);

        $host = auth()->user()->host;

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
            'is_published' => 'wait',

        ]);

        return redirect(route('client.hotel.index'));
    }

    /** when status is ok or wait do not update
     * @param Hotel $hotel
     * @return void
     */
    public function CheckStatusHotel(Hotel $hotel): void
    {
        if ($hotel->is_published === 'wait' || $hotel->is_published === 'ok') {

            abort(403);

        }
    }

    /**  check for unique name for hotel in one city and one host
     * @param CreateHotelRequest $request
     * @param Host $host
     * @return bool
     */
    public function getNameHotelIsExists(CreateHotelRequest $request, Host $host): bool
    {
        return Hotel::query()->where('name', $request->get('name'))
            ->where('host_id', $host->id)
            ->where('city_id', $request->get('city_id'))->exists();
    }

    /**check for unique name for hotel in one city and one host in update
     * @param CreateHotelRequest $request
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

    public function downLoad(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'path' => ['required']
        ]);

        if ($validate->fails()) {

            session()->flash('delete', 'عکس يافت نشد!');

            return redirect(route('client.hotel.index'));
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
     *
     * @param CreateHotelRequest $request
     * @param Hotel $hotel
     * @return string
     */
    public function uploadLicense(Request $request, Hotel $hotel): string
    {
        if ($request->hasFile('license')) {

            Storage::delete($hotel->license);

            $path = $request->file('license')->storePublicly('public/images/license');

        } else {
            $path = $hotel->license;
        }

        return $path;
    }
}
