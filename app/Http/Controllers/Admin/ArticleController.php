<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
         $article =  Article::all();
         return view('admin.articles.index',compact('article'));
     }

     public function show(Article $article){
         return view('admin.articles.show',compact('article'));
     }

     public function create(){
         return view('admin.articles.create');
     }

     public function store(Request $request){

         Article::create([
            'photo'=>$request->imgA,
            'title'=>$request->titleA,
            'message'=>$request->messageA,
            'articleOwner'=>$request->articleOwnerA,

         ]);

         return redirect()->route('admin.articles.index');
     }

     public function edit(Article $article){
         return view('admin.articles.edit',compact('article'));
     }

     public function update(Request $request, Article $article){
        $article->update([
            'photo'=>$request->imgA,
            'title'=>$request->titleA,
            'message'=>$request->messageA,
            'articleOwner'=>$request->articleOwnerA,
         ]);

         return redirect()->route('admin.articles.index');
     }


     public function destroy(Article $article){
        $article->delete();
         return redirect()->route('admin.articles.index');

     }
}
