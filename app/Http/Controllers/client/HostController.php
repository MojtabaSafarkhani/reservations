<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Host\HostRegisterRequest;
use App\Models\Host;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function create()
    {
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

        return redirect(route('home'));
    }
}
