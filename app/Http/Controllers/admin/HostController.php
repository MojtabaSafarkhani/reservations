<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Host;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validate = Validator::make($request->all(), [
            'path' => 'required|exists:hosts,national_card_photo'
        ]);

        if ($validate->fails()) {

            session()->flash('delete', 'عکس يافت نشد!');

            return redirect(route('hosts.index'));
        }

        $photo = $request->get('path');
        $array = explode(' . ', $photo);
        $ext = end($array);
        $file = public_path() . $photo;
        $header = ['Content - Type' => 'application / image'];
        $name = Carbon::now() . "." . $ext;
        return response()->download($file, $name, $header);


    }
}
