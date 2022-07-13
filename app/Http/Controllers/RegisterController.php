<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('succes', 'Account already registered');
    }
}
