<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        $groups =  DB::table('groups')->get();
         return view('admin.groups.index',compact('groups'));
     }

     public function show($id){
         $groups = DB::table('groups')->find($id);
         return view('admin.groups.show',compact('groups'));
     }

     public function create(){
         return view('admin.groups.create');
     }

     public function store(Request $request){

         DB::table('groups')->insert([
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

     public function edit($id){
         $groups = DB::table('groups')->find($id);
         return view('admin.groups.edit',compact('groups'));
     }

     public function update(Request $request, $id){
         DB::table('groups')->where("id","=",$id)->update([
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


     public function destroy($id){
         DB::table('groups')->where("id","=",$id)->delete();

         return redirect()->route('admin.groups.index');

     }
}
