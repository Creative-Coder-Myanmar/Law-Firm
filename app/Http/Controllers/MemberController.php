<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index(){
        return view('admin.members.index');
    }

    function create(){
        return view('admin.members.create');
    }
}
