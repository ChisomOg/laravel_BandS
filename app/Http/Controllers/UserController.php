<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // reg form
    public function register(){
        return view('user.create');
    }

    public function store(Request $request){
        $FormFields = $request -> validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash password
        $FormFields['password'] = bcrypt($FormFields['password']);

        $User = User::create($FormFields);

        auth()->login($User);

        return redirect('/')-> with('message', 'User registered');
    }

    public function login(){
        return view('user.login');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'successful logout');
    }

    public function loginauth(Request $request){
        $FormFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'  
        ]);

        if(auth()->attempt($FormFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');
    }
}
