<?php

namespace App\Http\Controllers\User;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function index(){
        $query = News::latest();
        $query->when(request('search'),function($query,$search){
            $query->where('title','like','%' .$search. '%');
        });
        $news = $query->paginate(9)->withQueryString();
        return view('blogs',compact('news'));
    }

    function show(News $new){
        return view('show',compact('new'));
    }
}
