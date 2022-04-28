<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckHostOkMiddleware;
use App\Http\Requests\Gallery\CreateGalleryRequest;
use App\Models\Gallery;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckHostOkMiddleware::class);
    }
    public function index(Hotel $hotel)
    {
        Gate::authorize('HotelsForRealHost', $hotel);

        return view('client.galleries.index', [

            'images' => $hotel->galleries,
            'hotel' => $hotel,

        ]);
    }

    public function store(Hotel $hotel, CreateGalleryRequest $request)
    {
        Gate::authorize('HotelsForRealHost', $hotel);

        $path = $request->file('image')->storePublicly('public/images/galleries');

        $hotel->galleries()->create([

            'image' => $path,

        ]);

        session()->flash('success', 'عکس با موفقيت افزوده شد!');

        return redirect(route('hotels.galleries.index', $hotel));
    }

    public function destroy(Hotel $hotel, Gallery $gallery)
    {
        Gate::authorize('HotelsForRealHost', $hotel);

        Storage::delete($gallery->image);

        $gallery->delete();

        session()->flash('success', 'عکس با موفقيت حذف شد!');

        return redirect(route('hotels.galleries.index', $hotel));


    }
}
