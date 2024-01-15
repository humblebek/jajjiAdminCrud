<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookClassController extends Controller
{
    public function index(){
        $class =  DB::table('book_clasess')->get();
         return view('admin.class.index',compact('class'));
     }

     public function show($id){
         $class = DB::table('book_clasess')->find($id);
         return view('admin.class.show',compact('class'));
     }


     public function store(Request $request){

         DB::table('book_clasess')->insert([
            'name'=>$request->name,
            'phoneNum'=>$request->phonenum,
            'class'=>$request->class,

         ]);

         return back();
     }




     public function destroy($id){
         DB::table('book_clasess')->where("id","=",$id)->delete();

         return redirect()->route('Cindex');

     }
}
