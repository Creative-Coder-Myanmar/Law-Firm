<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\helpers\Uploader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{
    public function __construct(private Uploader $uploader)
    {
        // code ...
    }

    function index(){
        return view('admin.members.index');
    }

    function create(){
        return view('admin.members.create');
    }

    function store(MemberRequest $request){
        $imageName = null;
        if ($file = request('profile')) {
            $imageName = $this->uploader->upload($file, 'profile');
        }
        Member::create([
            'profile' => $imageName,
            'name' => $request->name,
            'position' => $request->position,
            'about'=> $request->about,
        ]);
        return back();
        // return redirect()->route('members.index');
    }
}
