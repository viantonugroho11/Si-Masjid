<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginMemberController extends Controller
{
    //
    use AuthenticatesUsers;


    public function loginMember(Request $request)
    {
        $input = $request->all();


        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role_id == 5) {
                return redirect('/');
            }
            else{
                return redirect('/login-member')->with("error","Akun yang anda masukan salah");
            }
        }else{

            return redirect('/login-member');
        }

    }
}
