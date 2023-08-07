<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\helpers\Uploader;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function __construct(private Uploader $uploader)
    {
        // code ...
    }

    function create(){
        return view('admin.news.create');
    }

    function store(NewsRequest $request){
        $imageName = null;
        if ($file = request('image')) {
            $imageName = $this->uploader->upload($file, 'news');
        }
        News::create([
            'image' => $imageName,
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

    function update(News $new, NewsRequest $request){
        $new->update([
            // 'image' => $fileName,
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'description'=> $request->description,
        ]);
        return back();
    }
}
