<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Host\HostRegisterRequest;
use App\Models\Host;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostController extends Controller
{

    public function index()
    {
        $userExists = Host::query()->where('user_id', auth()->user()->id)->exists();

        if (!$userExists) {

            return redirect(route('host.register'));

        }

        return view('client.hosts.index', [

            'host' => auth()->user()->host,
            'status' => $this->checkStatus(auth()->user()->host->status),

        ]);


    }

    public function create()
    {
        $userExists = Host::query()->where('user_id', auth()->user()->id)->exists();

        if ($userExists) {

            session()->flash('warning', 'اطلاعات شما قبلا ثبت شده است!');

            return redirect(route('host.index'));

        }
        return view('client.hosts.create');
    }

    public function store(HostRegisterRequest $request)
    {


        $path = $request->file('national_card_photo')->storePublicly('public/images/hosts');

        auth()->user()->host()->create([

            'phone' => $request->get('phone'),
            'national_code' => $request->get('national_code'),
            'national_card_photo' => $path,
            'address' => $request->get('address'),
        ]);

        //redirect host to index that table show status of information

        return redirect(route('host.index'));
    }


    public function checkStatus($status)
    {

        if ($status == 'wait') {

            $statusClient = [
                'class' => 'bg-warning',
                'message' => 'در انتظار تایید'
            ];
        } elseif ($status == 'ok') {
            $statusClient = [
                'class' => 'bg-success',
                'message' => 'تاييد شد'
            ];
        } else {
            $statusClient = [
                'class' => 'bg-danger',
                'message' => 'رد درخواست'
            ];



        }
        return $statusClient;
    }

}
