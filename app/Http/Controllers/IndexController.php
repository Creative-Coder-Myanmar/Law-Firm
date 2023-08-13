<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index()
    {
        $news = News::latest()->paginate(3);
        $members = Member::latest()->paginate(4);
        return view('index', compact('news', 'members'));
    }

    function show(Member $member)
    {
        return view('show-member', compact('member'));
    }

    function members()
    {
        $members = Member::latest()->paginate(20);
        return view('members', compact('members'));
    }

    function about()
    {
        return view('about', [
            'members' => Member::where('position', 'like', '%partner%')->get(),
        ]);
    }

    public function performancesIndex()
    {
        return view('our-performances', [
            'members' => Member::where('position', 'like', '%partner%')->get(),
        ]);
    }

    public function servicesIndex()
    {
        return view('our-services');
    }
}
