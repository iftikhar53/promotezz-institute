<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::latest()->get();
        $data['batches'] = $batches;

        return view("admin.batches.list", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = course::all();
        $data['courses'] = $courses;

        $trainers = Trainer::all();
        $data['trainers'] = $trainers;

        return view("admin.batches.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'trainer' => 'required',
            'course' => 'required',
        ]);

        if ($validator->passes()) {
            $batch = new Batch();
            $batch->name = $request->name;
            $batch->start_date = $request->start_date;
            $batch->end_date = $request->end_date;
            $batch->trainer_id = $request->trainer;
            $batch->course_id = $request->course;
            $batch->status = $request->status;
            $batch->user_id = $request->userid;
            $batch->save();

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
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($batchId, Request $request)
    {
        $batch = Batch::find($batchId);
        $data['batch'] = $batch;

        $courses = course::all();
        $data['courses'] = $courses;

        $trainers = Trainer::all();
        $data['trainers'] = $trainers;

        if(empty($batch)){
            return redirect()->route('admin.batches.index');
        }

        return view('admin.batches.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($batchId,Request $request)
    {
        $batch = Batch::find($batchId);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'trainer' => 'required',
            'course' => 'required',
        ]);

        if ($validator->passes()) {
            $batch->name = $request->name;
            $batch->start_date = $request->start_date;
            $batch->end_date = $request->end_date;
            $batch->trainer_id = $request->trainer;
            $batch->course_id = $request->course;
            $batch->status = $request->status;
            $batch->user_id = $request->userid;
            $batch->save();

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
     * Remove the specified resource from storage.
     */
    public function destroy($batchId, Request $request)
    {
        $batch = Batch::find($batchId);
        if (empty($batch)) {
            $request->session()->flash('error', 'Batch Not Found');
            return response()->json([
                'status' => false,
                'message' => 'Batch Not Found'
            ]);
        }
        $batch->delete();

        $request->session()->flash('success', 'Batch Deleted..!');
        return response()->json([
            'status' => true,
            'message' => 'Batch Deleted..!'
        ]);
    }
}
