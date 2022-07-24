<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\features\CreateFeatureRequest;
use App\Http\Requests\features\UpdateFeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    public function index()
    {
        return view('admin.features.index', [

            'features' => Feature::query()->paginate(4),

        ]);
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(CreateFeatureRequest $request)
    {


        $path = $request->file('image')->storePublicly('public/images/features');

        Feature::query()->create([

            'image' => $path,
            'title' => $request->get('title'),

        ]);

        session()->flash('success', 'ويژگي با موفقيت اضافه شد!');

        return redirect(route('features.index'));
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', [
            'feature' => $feature
        ]);
    }

    public function update(Feature $feature, UpdateFeatureRequest $request)
    {

        $isTitleUsed = Feature::query()->where('title', $request->get('title'))
            ->where('id', '!=', $feature->id)->exists();

        if ($isTitleUsed) {

            return redirect()->back()->withErrors(['title' => 'عنوان قبلا انتخاب شده است.']);
        }

        if ($request->has('image')) {

            $path = $request->file('image')->storePublicly('public/images/features');

            Storage::delete($feature->image);

        } else {

            $path = $feature->image;

        }

        $feature->update([

            'image' => $path,

            'title' => $request->get('title'),
        ]);

        session()->flash('success', 'ويژگي با موفقيت ويرايش شد!');

        return redirect(route('features.index'));
    }

    public function destroy(Feature $feature)
    {
        // check for hotel that exists or not

        if ($feature->hotels()->count() > 0) {

            session()->flash('delete', 'اين ويژگي به چندين هتل داده شده است!');

            return redirect(route('features.index'));
        }
        $feature->delete();

        Storage::delete($feature->image);

        session()->flash('success', 'ويژگي با موفقيت حذف شد!');

        return redirect(route('features.index'));

    }
}
