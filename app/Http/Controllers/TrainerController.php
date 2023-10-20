<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::latest()->get();
        return view('admin.trainers.list', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = course::all();
        return view('admin.trainers.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'mobile_number' => 'unique:trainers,mobile_number,' . $trainer->id,
           
        ]);

        if ($validator->passes()) {
            $trainer = new Trainer();
            $trainer->name = $request->name;
            $trainer->mobile_number = $request->mobile;
            $trainer->email = $request->email;
            $trainer->status = $request->status;
            $trainer->user_id = $request->userid;
            $trainer->course_id = $request->course;
            $trainer->save();

            session()->flash('success', 'Trainer added successfuly');

            return response()->json([
                'status' => true,
                'message' => 'Trainer added successfuly'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($trainerId, Request $request)
    {
        $trainer = Trainer::find($trainerId);
        $data['trainer'] = $trainer;

        $courses = course::all();
        $data['courses'] = $courses;

        if(empty($trainer)){
            return redirect()->route('admin.trainers.index');
        }
        return view('admin.trainers.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($trainerId, Request $request)
    {
        $trainer = Trainer::find($trainerId);
        if(empty($trainer)){
            $request->session()->flash('error', 'Trainer Not Found');
            return response()->json([
                'status' => false,
                'notFound' => true,
                'message' => 'Trainer Not Found'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'mobile_number' => 'unique:trainers,mobile_number,' . $trainer->id,
           
        ]);

        if ($validator->passes()) {
            $trainer->name = $request->name;
            $trainer->mobile_number = $request->mobile;
            $trainer->email = $request->email;
            $trainer->status = $request->status;
            $trainer->user_id = $request->userid;
            $trainer->course_id = $request->course;
            $trainer->save();

            session()->flash('success', 'Trainer Updated Successfuly');

            return response()->json([
                'status' => true,
                'message' => 'Trainer Updated Successfuly'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($trainerId, Request $request)
    {
        $trainer = Trainer::find($trainerId);
        if(empty($trainer)){
            $request->session()->flash('error', 'Trainer Not Found');
            return response()->json([
                'status'=> false,
                'message'=> 'Trainer Not Found'
                ]);
        }
        $trainer->delete();

        $request->session()->flash('success','Trainer Deleted..!');
        return response()->json([
            'status'=> true,
            'message'=> 'Trainer Deleted..!'
            ]);
    }
}
