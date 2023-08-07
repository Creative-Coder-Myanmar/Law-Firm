<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    function create(){
        return view('admin.news.create');
    }

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
        $query = News::latest();
        $query->when(request('search'),function($query,$search){
            $query->where('title','like','%' .$search. '%');
        });
        $news = $query->paginate(4)->withQueryString();
        return view('admin.news.index',compact('news'));
    }

    function destroy(News $new){
        $new->delete();
        return back();
    }

    function edit(News $new){
        return view('admin.news.edit',compact('new'));
    }

    function update(Request $request){
        dd($request->all());
        // $new->update([
        //     // 'image' => $fileName,
        //     'title' => $request->title,
        //     'slug' => str_replace(' ', '-', strtolower($request->title)),
        //     'description'=> $request->description,
        // ]);
        return back();
    }
}
