<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class UserLoginController extends Controller
{
    //
    public function loginForm()
    {
        return view('endUser.auth.login');
    }

    public function login(Request $request)
    {
        if(auth()->guard('web')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])){
            return redirect()->route('home')->with(['success' => '😇  ' . 'مرحبا']);
        } else {
            return redirect()->back()->with(['error' => '😕  ' . 'هناك خطا بالبيانات']);
        }
    }

    public function registerForm()
    {
        return view('endUser.auth.register');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'tel' => $request->tel,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('home')->with(['success' => '😇  ' . ' مرحبا'  ]);
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('yourKeyGoesHere');
        session()->regenerate();
        Artisan::call('cache:clear');
        return redirect()->back()->with(['success' => '☹️ ' . 'تم الخروج بنجاح']);
    }
}
