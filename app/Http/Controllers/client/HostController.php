<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Host\HostRegisterRequest;
use App\Http\Requests\Host\UpdateInfoRequest;
use App\Models\Host;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\True_;

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

            return redirect(route('client.host.index'));

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

        return redirect(route('client.host.index'));
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

    public function edit()
    {
        if (auth()->user()->host->status !== 'nok') {

            session()->flash('warning', 'اطلاعات شما نیاز به ویرایش ندارد!');

            return redirect(route('client.host.index'));
        }

        return view('client.hosts.edit', [

            'host' => auth()->user()->host,
        ]);
    }

    public function update(UpdateInfoRequest $request, Host $host)
    {
        $codeIsExists = $this->checkCodeUnique($request, $host);

        if ($codeIsExists) {

            return redirect(route('host.edit'))->withErrors(['national_code' => 'کد ملي قبلا انتخاب شده است!']);

        }


        $path = $this->checkUpload($request, $host);

        $host->update([

            'phone' => $request->get('phone'),
            'national_code' => $request->get('national_code'),
            'national_card_photo' => $path,
            'address' => $request->get('address'),
            'status' => 'wait'
        ]);

        return redirect(route('client.host.index'));
    }

    //Check the uploaded host image or used old image
    private function checkUpload(Request $request, Host $host)
    {
        if ($request->has('national_card_photo')) {

            $path = $request->file('national_card_photo')->storePublicly('public/images/hosts');

            Storage::delete($host->national_card_photo);

        } else {

            $path = $host->national_card_photo;
        }

        return $path;
    }


    // check the national code not exists in hosts

    private function checkCodeUnique(Request $request, Host $host)
    {

        $codeIsExists = Host::query()->where('national_code', $request->get('national_code'))
            ->where('id', '!=', $host->id)->exists();


        return $codeIsExists;


    }


}
