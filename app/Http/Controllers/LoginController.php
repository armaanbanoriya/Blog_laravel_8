<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function reg_page()
    {
        return view('admin.register');
    }

    public function register(Request $a)
    {
        $a->validate([
            'email' => 'required|unique:users,email,|max:255',
            'name' => 'required',
            'password' => 'required',
        ]);


       $data =  new User();

       $data->name=$a->name;
       $data->email=$a->email;
       $data->password=bcrypt($a['password']);

       $data->save();
       if($data)
       {
           return redirect('gr')->with('message','registration successfull!');
       }
    }

    public function log_page()
    {
        return view('admin.login');
    }

    public function login(Request $a)
    {
        // return $a->input();
        $credentials = $a->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials))
        {
            Session::put('armaanbanoriya',$a['email']);

            return redirect('admin/index')->with('message','Login Successfull');
        }else{
            Auth::logout();
            return back()->with('message','Incorrect credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('armaanbanoriya');
        return redirect('/');

    }
}
