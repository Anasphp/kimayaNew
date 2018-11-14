<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact-us');
    }

    public function contactDetail() {
    	$input = Input::all();
        $contact = new Contact;
        $contact->contacts_name = $input['name'];
        $contact->contacts_number = $input['number'];
        $contact->contacts_subject = $input['subject'];
        $contact->contacts_message = $input['message'];
        $contact->save();
        return redirect()->route('contact');
    }
}
