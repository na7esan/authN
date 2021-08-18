<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        // 会員登録処理を行う

        $user=User::create($request->all());
        Auth::login($user);

        return redirect()
            ->route('users.index');

    }
}
