<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    function index(){
        return view('contact');
    }

    function send(){
        Mail::to('ak@demo.com')->queue(new ContactUsMail(
            request()->name,
            request()->email,
            request()->phone,
            request()->message
        ));
        return back();
    }
}
