<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teacher =  Teacher::all();
         return view('admin.teachers.index',compact('teacher'));
     }

     public function show(Teacher $teacher){
         return view('admin.teachers.show',compact('teacher'));
     }

     public function create(){
         return view('admin.teachers.create');
     }

     public function store(Request $request){

         Teacher::create([
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

     public function edit(Teacher $teacher){
         return view('admin.teachers.edit',compact('teacher'));
     }

     public function update(Request $request, Teacher $teacher){
         $teacher->update([
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


     public function destroy(Teacher $teacher){
       $teacher->delete();

         return redirect()->route('admin.teachers.index');

     }
}
