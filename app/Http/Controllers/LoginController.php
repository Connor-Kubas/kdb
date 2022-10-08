<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request);
        // $credentials = $request->validate([
        //     'name' => ['required'],
        //     'password' => ['required'],
        // ]);
        // dd($credentials);
        
        $user = User::where('name', $request->name)->get()->first();

        // dd(Hash::check($request->password, $user->password));
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();

            // dd('success');
            return view('landing');
        }

        // dd("fail");
        return back();
    }

    public function signUp(Request $request)
    {
        $movie_id = 1;
        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        return view('landing');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
