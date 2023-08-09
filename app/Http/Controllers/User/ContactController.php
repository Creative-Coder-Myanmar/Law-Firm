<?php

namespace App\Http\Controllers\User;

use App\Mail\ContactUsMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    function index(){
        return view('contact');
    }

    public function send(ContactRequest $request){
        Mail::to('ak@demo.com')->queue(new ContactUsMail(
            request()->name,
            request()->email,
            request()->phone,
            request()->message,
        ));
        return back();
    }
}
