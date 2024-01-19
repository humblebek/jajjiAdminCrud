<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers =  DB::table('teachers')->get();
         return view('admin.teachers.index',compact('teachers'));
     }

     public function show($id){
         $teachers = DB::table('teachers')->find($id);
         return view('admin.teachers.show',compact('teachers'));
     }

     public function create(){
         return view('admin.teachers.create');
     }

     public function store(Request $request){

         DB::table('teachers')->insert([
            'name'=>$request->nameT,
            'occupation'=>$request->occupationT,
            'status'=>$request->statusT,
            'photo'=>$request->imgT,
            'telegram'=>$request->telegram,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
         ]);

         return redirect()->route('admin.teachers.index');
     }

     public function edit($id){
         $teachers = DB::table('teachers')->find($id);
         return view('admin.teachers.edit',compact('teachers'));
     }

     public function update(Request $request, $id){
         DB::table('teachers')->where("id","=",$id)->update([
            'name'=>$request->nameT,
            'occupation'=>$request->occupationT,
            'status'=>$request->statusT,
            'photo'=>$request->imgT,
            'telegram'=>$request->telegram,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
         ]);

         return redirect()->route('admin.teachersindex');
     }


     public function destroy($id){
         DB::table('teachers')->where("id","=",$id)->delete();

         return redirect()->route('admin.teachersindex');

     }
}
