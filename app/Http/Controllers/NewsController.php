<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //create page
    function create(){
        return view('admin.news.create');
    }

    //create page
    function store(NewsRequest $request){
        if($request->hasFile('image')) {
            $file = $request->file("image");
            $fileName = $file->getClientOriginalName();
        }
        News::create([
            // 'image' => $fileName,
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'description'=> $request->description,
        ]);
        return redirect()->route('news.index');
    }

    function index(){
        $news = News::orderBy('id','desc')->paginate(4);
        $news->appends(request()->query());
        return view('admin.news.index',compact('news'));
    }

    // destroy
    function destroy(News $new){
        $new->delete();
        return back();
    }

    //edit page
    function edit(News $new){
        return view('admin.news.edit',compact('new'));
    }
}
