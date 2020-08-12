<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class ShareholderLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:shareholder');
    }
    public function showLoginForm(){
        return view('auth.shareholder-login'); 
    }

    public function login(Request $request){
        //validate the form data
        $this->validate($request,[
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attempt to log the user in

        if(Auth::guard('shareholder')->attempt(['email'=> $request->email, 'password'=> $request->password],$request->remember)){
            return redirect()->intended(route('shareholder.dashboard'));
        }

        //if unsuccessfull, then redirect back to the login page

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    
}
