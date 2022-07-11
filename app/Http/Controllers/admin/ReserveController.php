<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $reserves = Reserve::with('order')->paginate(5);

        return view('admin.reserves.index', [
            'reserves'=>$reserves
        ]);
    }
}
