<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function contact(){
        return view('front.contact');
    }

    public function courses(){
        return view('front.courses');
    }

}
