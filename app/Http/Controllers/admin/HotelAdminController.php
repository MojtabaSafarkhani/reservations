<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelAdminController extends Controller
{
    public function index()
    {
        return view('admin.hotels.index', [

            'hotels' => Hotel::all(),

        ]);

    }
}
