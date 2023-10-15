<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('admin.students.list');
    }

    public function create(){
        return view('admin.students.create');
    }
}
