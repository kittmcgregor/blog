<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

use Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
	    return view('loginform');
    }
    public function processLogin(loginRequest $req){
	    		//processing
		$credential = $req->only("username","password");
		
			if(Auth::attempt($credential)){
				return redirect("users/1");
			}else{
				return redirect("login")->with('message',"Try again!");
			}
    }
    public function logout(){
	    		Auth::logout();
		return redirect('login');
    } 
}
