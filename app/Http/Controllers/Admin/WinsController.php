<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Win;

class WinsController extends Controller
{
    public function index(){
       $win =  Win::all();
        return view('admin.wins.index',compact('win'));
    }



    public function create(){
        return view('admin.wins.create');

    }


    public function store(Request $request){

        Win :: create([
            'photo'=>$request->imgW,
            'title'=>$request->titleW,
            'message'=>$request->messageW,
        ]);

        return redirect()->route('admin.wins.index');
    }


    public function show(Win $win){
        return view('admin.wins.show',compact('win'));
    }



    public function edit(Win $win){
        return view('admin.wins.edit',compact('win'));
    }



    public function update(Request $request, Win $win){
        $win->update([
            'photo'=>$request->imgW,
            'title'=>$request->titleW,
            'message'=>$request->messageW,
        ]);

        return redirect()->route('admin.wins.index');
    }


    public function destroy(Win $win){
        $win->delete();
        return redirect()->route('admin.wins.index');
    }



}
