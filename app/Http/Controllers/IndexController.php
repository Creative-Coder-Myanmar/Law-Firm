<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index(){
        $news = News::latest()->paginate(3);
        return view('index',compact('news'));
    }
}
