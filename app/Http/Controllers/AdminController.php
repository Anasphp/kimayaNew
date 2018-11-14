<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Contact;
use Illuminate\Http\Request;
use View;

class AdminController extends Controller
{
    public function index(Request $request){
        if($request->session()->get('username') == 'Admin') {
            $contact = Contact::paginate(5);
            return View::make('admin')->with('contact', $contact);
        }
        return redirect()->route('login');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login');
    }


}
