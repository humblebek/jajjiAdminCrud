<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\BookClass;
use Illuminate\Http\Request;

class BookClassController extends Controller
{
    public function index(){
        $class =  BookClass::all();
         return view('admin.class.index',compact('class'));
     }

     public function show(BookClass $class){
         return view('admin.class.show',compact('class'));
     }


     public function store(Request $request){

        BookClass::create([
            'name'=>$request->name,
            'phoneNum'=>$request->phonenum,
            'class'=>$request->class,

         ]);

         return back();
     }




     public function destroy(BookClass $class){
         $class->delete();

         return redirect()->route('admin.class.index');

     }
}
