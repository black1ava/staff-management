<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ShowLoginForm(){
        return view('accounts.login');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $remember = $request->filled('remember');

        if(Auth::attempt($credential, $remember)){
            return redirect()->route('home');
        } 
    }
}
