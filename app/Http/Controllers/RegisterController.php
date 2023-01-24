<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[     
        ]);
    }

    public function create(Request $request)
    {
        $request -> validate(
            [ 
             'name' => 'required',
             'email' => 'required|email|unique:users',
             'password' => 'required',
             ]
         );
 
         $hashedPassword = Hash::make($request->password);
 
         $user = new User([
             'name' => $request->name,
             'email' => $request->email,
             'password' => $hashedPassword
         ]);
         $user->save();

        return redirect()->back();
    }

}
