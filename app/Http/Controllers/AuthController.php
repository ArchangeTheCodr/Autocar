<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view("auth.register");
    }

    public function registerUser(AuthRequest $request){
        $user = User::create($request->validated());
        Auth::login($user); 
        return redirect()->route('home')->with('success','Inscription effectuer avec succes');
    }

    public function login() {
        return view('auth.login');
    }
    
    public function loginUser(AuthRequest $request) {
        // dd($request);
        $user = $request->validated();
         
        if(Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'))->with('success','Vous etes desormais connecte');  
        }

        return to_route('home')->withErrors('Informations incorrect');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
