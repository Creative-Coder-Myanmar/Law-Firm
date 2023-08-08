<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index(){
        $news = News::latest()->paginate(3);
        $members = Member::latest()->paginate(4);
        return view('index',compact('news','members'));
    }

    function members(){
        $members = Member::latest()->paginate(20);
        return view('members',compact('members'));
    }

    function about(){
        return view('about');
    }
}
