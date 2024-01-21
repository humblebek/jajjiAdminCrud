<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        $group =  Group::all();
         return view('admin.groups.index',compact('group'));
     }


     public function create(){
         return view('admin.groups.create');
     }


     public function store(Request $request){

         Group::create([
            'photo'=>$request->imgG,
            'title'=>$request->titleG,
            'message'=>$request->messageG,
            'age'=>$request->AgeG,
            'seat'=>$request->seatG,
            'lessonTime'=>$request->lessonTimeG,
            'tutionFee'=>$request->tutionFeeG,
         ]);

         return redirect()->route('admin.groups.index');
     }

     public function show(Group $group){
        return view('admin.groups.show',compact('group'));
    }

     public function edit(Group $group){
         return view('admin.groups.edit',compact('group'));
     }

     public function update(Request $request, Group $group){
        $group ->update([
             'photo'=>$request->imgG,
             'title'=>$request->titleG,
             'message'=>$request->messageG,
             'age'=>$request->AgeG,
             'seat'=>$request->seatG,
             'lessonTime'=>$request->lessonTimeG,
             'tutionFee'=>$request->tutionFeeG,
         ]);

         return redirect()->route('admin.groups.index');
     }


     public function destroy(Group $group){
        $group->delete();

         return redirect()->route('admin.groups.index');

     }
}
