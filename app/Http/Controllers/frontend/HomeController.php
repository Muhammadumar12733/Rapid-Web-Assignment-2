<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ContactModel;

class HomeController extends Controller
{
    //
    public function index () {
        return view('frontend/index');
    }

    public function about () {
        return view('frontend/about');
    }

    public function contact () {
        return view('frontend/contact');
    }

    public function services () {
        return view('frontend/services');
    }

    public function saveData(Request $request) {
        $contact = new ContactModel();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->saveData();

        return 'Ok';
    }
}
