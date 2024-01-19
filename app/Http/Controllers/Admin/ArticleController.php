<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
         $articles =  DB::table('articles')
        // ->join('teachers','articles.id','=','teachers.id')
        ->get();
         return view('admin.articles.index',compact('articles'));
     }

     public function show($id){
         $articles = DB::table('articles')->find($id);
         return view('admin.articles.show',compact('articles'));
     }

     public function create(){
         return view('admin.articles.create');
     }

     public function store(Request $request){

         DB::table('articles')->insert([
            'photo'=>$request->imgA,
            'title'=>$request->titleA,
            'message'=>$request->messageA,
            'articleOwner'=>$request->articleOwnerA,

         ]);

         return redirect()->route('admin.articles.index');
     }

     public function edit($id){
         $articles = DB::table('articles')->find($id);
         return view('admin.articles.edit',compact('articles'));
     }

     public function update(Request $request, $id){
         DB::table('articles')->where("id","=",$id)->update([
            'photo'=>$request->imgA,
            'title'=>$request->titleA,
            'message'=>$request->messageA,
            'articleOwner'=>$request->articleOwnerA,
         ]);

         return redirect()->route('admin.articles.index');
     }


     public function destroy($id){
         DB::table('articles')->where("id","=",$id)->delete();

         return redirect()->route('admin.articles.index');

     }
}
