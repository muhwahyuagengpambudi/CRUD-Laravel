<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[     
        ]);
    }
    
    public function auth(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return  redirect('/book/all')->with('success', 'Register Success');      
        }
        
        
        return redirect()->back()->with('alert', 'Updated!');
    }

    public function home(){
        
        return view('book.all');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/book/all');
    }
}
