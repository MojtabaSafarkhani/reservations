<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Host;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index()
    {
        return view('admin.hosts.index', [

            'hosts' => Host::query()->paginate(5),

        ]);
    }

    public function download(Request $request)
    {
        $photo = $request->get('path');
        $array = explode('.', $photo);
        $ext = end($array);
        $file = public_path() . $photo;
        $header = ['Content-Type' => 'application/image'];
        $name = Carbon::now() . "." . $ext;
        return response()->download($file, $name, $header);


    }
}
