<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
        
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'newpassword' => 'required|min:8|different:password',
            'confirmpassword' => 'required|same:newpassword',
        ]);
    
        $user = Auth::user();
        $currentPassword = $request->input('password');
        $newPassword = $request->input('newpassword');
    
        if (Hash::check($currentPassword, $user->password)) {
            $user->password = Hash::make($newPassword);
            $user->save();
    
            Alert::success('Success', 'Password Berhasil Diubah');
            return redirect('/dashboard');
        }
        
        Alert::error('Error', 'Change Password Error');
        return redirect()->back();
    }    


}
