<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('accounts.register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed'],
            'password_confirmation' => 'required'
        ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();

        if($user){
            $credential = $request->only(['email', 'password']);
            if(Auth::attempt($credential)){
                $user->name = $request['name'];
                return redirect()->route('home');
            }
        }
    }
}
