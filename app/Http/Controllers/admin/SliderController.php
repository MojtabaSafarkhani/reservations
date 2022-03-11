<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.sliders.index', [

            'sliders' => Slider::all(),

        ]);
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(CreateSliderRequest $request)
    {

        if (Slider::all()->count()>=3){

            session()->flash('delete', "بیشتر از 3 اسلایدر نمی توان داشت!");

            return redirect(route('sliders.index'));

        }

        $path = $request->file('image')->storePublicly('public/images/sliders');

        Slider::query()->create([

            'image' => $path,
            'link' => $request->get('link'),

        ]);

        session()->flash('success', 'اسلايدر با موفقيت اضافه شد!');

        return redirect(route('sliders.index'));
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', [
            'slider' => $slider
        ]);
    }

    public function update(Slider $slider, UpdateSliderRequest $request)
    {
        if ($request->has('image')) {

            $path = $request->file('image')->storePublicly('public/images/sliders');

            Storage::delete($slider->image);

        } else {

            $path = $slider->image;

        }

        $slider->update([

            'image' => $path,

            'link' => $request->get('link'),
        ]);

        session()->flash('success', 'اسلايدر با موفقيت ويرايش شد!');

        return redirect(route('sliders.index'));
    }

    public function destroy(Slider $slider)
    {
        Storage::delete($slider->image);

        $slider->delete();

        session()->flash('success', 'اسلايدر با موفقيت حذف شد!');

        return redirect(route('sliders.index'));

    }
}
