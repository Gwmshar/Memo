<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function store()
    {
        $temp = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        $temp['password'] = bcrypt($temp['password']);
        $user = User::create($temp);
        auth()->login($user);
        return redirect()->route('home');
    }
    public function authenticate()
    {
        $temp = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($temp)) {
            request()->session()->regenerate();
            return redirect()->route('home');
        }
        return redirect()->route('login.show');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
    public function profile(User $id)
    {
        return view('layouts.profile', [
            'id' => $id,
            'posts' => $id->Post()->get()
        ]);
    }
    public function aboutus()
    {
        return view('layouts.AboutUs');
    }
    public function terms()
    {
        return view('layouts.TermsAndCondition');
    }
}
