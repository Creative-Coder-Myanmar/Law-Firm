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
        $query = Member::latest();
        $query->when(request('search'),function($query,$search){
            $query->where('name','like','%' .$search. '%');
        });
        $members = $query->paginate(4)->withQueryString();
        return view('admin.members.index',compact('members'));
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
        return redirect()->route('members.index');
    }

    function destroy(Member $member){
        if ($member->profile) {
            $this->uploader->remove($member->profile);
        }
        $member->delete();
        return back();
    }

    function edit(Member $member){
        return view('admin.members.edit',compact('member'));
    }

    function update(Member $member, MemberRequest $request){
        $imageName = null;
        if ($file = request('profile')) {
            if ($member->profile) {
                $this->uploader->remove($member->profile);
            }
            $imageName = $this->uploader->upload($file, 'profile');
        }else{
            $imageName = $member->profile;
        }
        $member->update([
            'profile' => $imageName,
            'name' => $request->name,
            'position' => $request->position,
            'about'=> $request->about,
        ]);
        return redirect()->route('members.index');
    }
}
