<?php

namespace App\Http\Controllers\client;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        return view('client.profile.index', [

            'user' => auth()->user()

        ]);
    }

    public function edit()
    {
        return view('client.profile.edit', [

            'user' => auth()->user()

        ]);
    }

    public function update(User $user, UpdateRequest $request)
    {
        if ($request->filled('password')) {

            if ($request->get('oldPassword') && Hash::check($request->get('oldPassword'), $user->password)) {

                $password = $request->get('password');

            } else {

                return redirect()->back()->withErrors(['oldPassword' => 'خطايي در پسورد فعلي يافت شد!']);
            }

        } else {
            $password = null;
        }

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' =>is_null($password) ? $user->password : Hash::make($password),

        ]);

        return redirect(route('profile.index'));
    }
}
