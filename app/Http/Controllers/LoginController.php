<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        if(empty($request->session()->get('username'))) {
            return view('login');
        } else {
            return redirect()->route('admin');
        }
    }

    public function loginToAdmin(Request $request) {
        	$input = Input::all();
            if($input['username'] == 'admin' && $input['password'] == 'admin') {
                session(['username' => 'Admin']);
                return redirect()->route('admin');
            }
            return redirect()->route('login');
    }


}
