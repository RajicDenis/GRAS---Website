<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
	public function authCheck() {

		if(Auth::check()) {
			return redirect()->route('admin_home');
		} else {
			return view('auth.login');
		}

	}

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')])) {
            // Authentication passed...
            return redirect('admin');
        } else {

            Session::flash('failed', 'Username ili password netočan!');
            Session::flash('alert_type', 'alert-danger');

            return back();
        }
    }

    public function logout() {

    	Auth::logout();

		return redirect('admin');

    }
}
