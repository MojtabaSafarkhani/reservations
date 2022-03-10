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

            'cities' => City::all(),

        ]);
    }

    public function create()
    {
        return view('admin.cities.create', [

            'cities' => City::all(),
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

            'cities' => City::all(),
            'city' => $city,
        ]);
    }

    public function update(City $city,UpdateCityRequest $request)
    {
        $isSlugUsed = City::query()->where('slug', $request->get('slug'))
            ->where('id', '!=', $city->id)->exists();

        if ($isSlugUsed) {

            return redirect()->back()->withErrors(['slug' => 'نامک قبلا انتخاب شده است.']);
        }

        $city->update([

            'name'=>$request->get('name'),
            'slug'=>$request->get('slug'),
            'city_id'=>$request->get('city_id'),

        ]);

        session()->flash('success',
            "شهر  $city->name  ويرايش شد.! "
        );

        return redirect(route('cities.index'));

    }

    public function destroy(City $city)
    {
        session()->flash('delete',
            "دسته بندي  $city->title حذف شد.! "
        );

        //must be search that hotel not in category

        

        $city->delete();


        return redirect(route('cities.index'));

    }
}
