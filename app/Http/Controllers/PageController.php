<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function blogs(){
        return view('pages.blogs');
    }

    public function teachers(){
        return view('pages.teachers');
    }

    public function wins(){
        return view('pages.wins');
    }

    public function class(){
        return view('pages.class');
    }



    
}
