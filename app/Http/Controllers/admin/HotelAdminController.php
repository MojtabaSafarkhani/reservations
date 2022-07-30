<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
}
