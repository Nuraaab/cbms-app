<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
           'email'=> 'required',
           'password'=>'required'
        ]);
        $user = User::where(['email' => $request->email])->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                Auth::login($user);
                if(Auth::check()){
                    return redirect('/redirect');
                }
            }
        }
    }

    public function register(Request $request)
    {
       $usertype = $request->input('role');

        // $user = User::create([
        //    'name' =>$request->username,
        //    'email'=>$request->email,
        //    'usertype'=>$usertype,
        //    'password'=>$request->password
        // ]);
        $user = new User();

        if($usertype === "admin"){
            $user->name = $request->username;
            $user->email = $request->email;
            $user->usertype = $usertype;
            $user->password = $request->password;
        }else if($usertype === "contractor"){
            $user->name = $request->username;
            $user->email = $request->email;
            $user->usertype = $usertype;
            $user->password = $request->password;
            $user->phone_number = $request->phone_number;
            $user->address = $request->address;
            $user->qualifications = $request->qualifications;
            $user->experience = $request->experience;
        }else if($usertype === "projectOwner"){
            $user->name = $request->username;
            $user->email = $request->email;
            $user->usertype = $usertype;
            $user->password = $request->password;
            $user->phone_number = $request->phone_number;
            $user->address = $request->address;
        }else if($usertype === "supplier"){
            $user->name = $request->username;
            $user->email = $request->email;
            $user->usertype = $usertype;
            $user->password = $request->password;
            $user->phone_number = $request->phone_number;
            $user->address = $request->address;
            $user->products = $request->products;
        }
        $user->save();
        if($user){
            Auth::login($user);
            if(Auth::check()){
                return redirect('/redirect')->withSuccess('User Registerd Succefully');
            }
        }
        
      if(validator()->fails()){
            return redirect()->back()->withErrors(validator());
          }

    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
