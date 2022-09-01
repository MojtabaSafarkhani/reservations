<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\City\CreateCityRequest;
use App\Http\Requests\City\UpdateCityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('admin.cities.index', [

            'cities' => City::query()->paginate(6),

        ]);
    }

    public function create()
    {
        return view('admin.cities.create', [

            'cities' => City::query()->where('city_id', null)->get(),
        ]);
    }

    public function store(CreateCityRequest $request)
    {
        $city = City::query()->create([

            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'city_id' => $request->get('city_id'),

        ]);

        session()->flash('success',
            "شهر  $city->name  ايجاد شد.! "
        );

        return redirect(route('cities.index'));
    }

    public function edit(City $city)
    {
        return view('admin.cities.edit', [

            'cities' => City::query()->where('city_id', null)->get(),
            'city' => $city,
        ]);
    }

    public function update(City $city, UpdateCityRequest $request)
    {
        $isSlugUsed = City::query()->where('slug', $request->get('slug'))
            ->where('id', '!=', $city->id)->exists();

        if ($isSlugUsed) {

            return redirect()->back()->withErrors(['slug' => 'نامک قبلا انتخاب شده است.']);
        }

        $city->update([

            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'city_id' => $request->get('city_id'),

        ]);

        session()->flash('success',
            "شهر  $city->name  ويرايش شد.! "
        );

        return redirect(route('cities.index'));

    }

    public function destroy(City $city)
    {

        if ($city->towns()->count() > 0 || $city->hotels()->count() > 0) {

            session()->flash('delete',
                "شهر  $city->title  قابل حذف نيست.! "
            );

            return redirect(route('cities.index'));
        }

        session()->flash('delete',
            "شهر  $city->name  حذف شد.! "
        );

        //must be search that hotel not in category


        $city->delete();


        return redirect(route('cities.index'));

    }
}
