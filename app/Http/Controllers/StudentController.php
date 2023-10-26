<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('batch.trainer')->get();
        $data['students'] = $students;

        return view('admin.students.list', $data);
    }

    public function create()
    {
        
        return view('admin.students.create');
    }

    public function destroy($studentId, Request $request){
        $student = Student::find($studentId);
        if (empty($student)) {
            $request->session()->flash('error', 'Student Not Found');
            return response()->json([
                'status' => false,
                'message' => 'Student Not Found'
            ]);
        }
        $student->delete();

        $request->session()->flash('success', 'Student Deleted..!');
        return response()->json([
            'status' => true,
            'message' => 'Student Deleted..!'
        ]);
    }



}
