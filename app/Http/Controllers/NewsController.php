<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //create page
    function create(){
        return view('admin.news.create');
    }

    //create page
    function store(Request $request){
        // if($request->hasFile('image')) {
        //     $file = $request->file("image");
        //     $fileName = $file->getClientOriginalName();
        //     News::create([
        //         'image' => $fileName,
        //         'title' => 'hello',
        //         'description'=> 'desc',
        //     ]);
        // }
        News::create([
                // 'image' => $fileName,
                'title' => 'hello',
                'description'=> 'desc',
            ]);
        return redirect()->route('news.index');
    }

    function index(){
        $news = News::orderBy('id','desc')->paginate(4);
        $news->appends(request()->query());
        return view('admin.news.index',compact('news'));
    }

    // destroy
    function destroy(News $slug){
        $slug->delete();
        return back();
    }
}
