<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        $courses = course::latest();


        return view('admin.courses.list',compact('courses'));
    }

    public function create(){
        return view('admin.courses.create');
    }
}
