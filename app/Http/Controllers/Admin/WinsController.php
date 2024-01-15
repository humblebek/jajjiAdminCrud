<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WinsController extends Controller
{
    public function index(){
       $wins =  DB::table('wins')->get();
        return view('admin.wins.index',compact('wins'));
    }

    public function show($id){
        $win = DB::table('wins')->find($id);
        return view('admin.wins.show',compact('win'));
    }

    public function create(){
        return view('admin.wins.create');
    }

    public function store(Request $request){

        DB::table('wins')->insert([
            'photo'=>$request->imgW,
            'title'=>$request->titleW,
            'message'=>$request->messageW,
        ]);

        return redirect()->route('index');
    }

    public function edit($id){
        $win = DB::table('wins')->find($id);
        return view('admin.wins.edit',compact('win'));
    }

    public function update(Request $request, $id){
        DB::table('wins')->where("id","=",$id)->update([
            'photo'=>$request->imgW,
            'title'=>$request->titleW,
            'message'=>$request->messageW,
        ]);

        return redirect()->route('index');
    }


    public function destroy($id){
        DB::table('wins')->where("id","=",$id)->delete();

        return redirect()->route('index');

    }



}
