<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Host;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'path' => ['required', 'exists:hosts,national_card_photo']
        ]);

        if ($validate->fails()) {

            session()->flash('delete', 'عکس يافت نشد!');

            return redirect(route('hosts.index'));
        }

        $photo = $request->get('path');
        $array = explode('.', $photo);
        $ext = end($array);
        $path = public_path() . $photo;
        $name = Carbon::now() . "." . $ext;
        return response()->download($path, $name);

    }

    public function accept(Request $request)
    {
        $host = Host::query()->where('id', $request->get('hostId'))->first();

        $host->update([

            'status' => 'ok'

        ]);
        return response()->json([
            'message' => 'ok',
            'host' => $host
        ]);
    }

    public function reject(Request $request)
    {

        $host = Host::query()->where('id', $request->get('hostId'))->first();

        $host->update([

            'status' => 'nok'

        ]);
        return response()->json([
            'message' => 'ok',
            'host' => $host
        ]);
    }
}
