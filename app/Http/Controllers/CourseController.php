<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class CourseController extends Controller
{
    public function index()
    {

        $courses = course::latest()->get();


        return view('admin.courses.list', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'slug' => 'required|unique:courses',
        //     'description' => 'required',
        //     'fee' => 'required|numeric',
        //     'ShowInHome' => 'required|in:Yes,No',
        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:courses',
            'description' => 'required',
            'fee' => 'required|numeric',
            'ShowInHome' => 'required|in:Yes,No',
        ]);

        if ($validator->passes()) {

            $course = new course;
            $course->name = $request->name;
            $course->slug = $request->slug;
            $course->description = $request->description;
            $course->fee = $request->fee;
            $course->status = $request->status;
            $course->user_id = $request->userid;
            $course->ShowInHome = $request->ShowInHome;
            $course->save();

            // logo save
            if (!empty($request->course_logo)) {
                $tempImage = TempImage::find($request->course_logo);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $course->id . '.' . $ext;
                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/course-logo/' . $newImageName;

                File::move($sPath, $dPath);

                $course->CourseLogo = $newImageName;
                $course->save();
            }

            //image save code
            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $course->id . '.' . $ext;
                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/course/' . $newImageName;

                // File::copy($sPath, $dPath);
                File::move($sPath, $dPath);

                $course->CourseBanner = $newImageName;
                $course->save();
            }


            session()->flash('success', 'Category added successfuly');

            return response()->json([
                'status' => true,
                'message' => 'Category added successfuly'
            ]);

        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function edit($courseId, Request $request)
    {
        $course = course::find($courseId);
        if (empty($course)) {
            return redirect()->route('admin.courses.index');
        }

        return view('admin.courses.edit', compact('course'));

    }

    public function update($courseId, Request $request)
    {
        $course = course::find($courseId);
        if (empty($course)) {
            $request->session()->flash('error', 'Course not found');
            return response()->json([
                'status' => false,
                'notFound' => true,
                'message' => 'Course not found'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:courses,slug,' . $course->id . ',id',
            'description' => 'required',
            'fee' => 'required|numeric',
            'ShowInHome' => 'required|in:Yes,No',
        ]);

        if ($validator->passes()) {
            $course->name = $request->name;
            $course->slug = $request->slug;
            $course->description = $request->description;
            $course->fee = $request->fee;
            $course->status = $request->status;
            $course->user_id = $request->userid;
            $course->ShowInHome = $request->ShowInHome;
            $course->save();

            $oldBanner = $course->CourseBanner;
            $oldLogo = $course->CourseLogo;

            //image save code
            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $course->id . '.' . $ext;
                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/course/' . $newImageName;

                // File::copy($sPath, $dPath);
                
                File::move($sPath, $dPath);
                // Attempt to move the file
               

                $course->CourseBanner = $newImageName;
                $course->save();

                // Delete old image
                File::delete(public_path() . '/uploads/course/' . $oldBanner);
            }

            // logo save
            if (!empty($request->course_logo)) {
                $tempImage = TempImage::find($request->course_logo);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $course->id . '.' . $ext;
                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/course-logo/' . $newImageName;


                
                File::move($sPath, $dPath);
               
                $course->CourseLogo = $newImageName;
                $course->save();

                // Delete old image
                File::delete(public_path() . '/uploads/course-logo/' . $oldLogo);
            }

            $request->session()->flash('success', 'Course Updated Successfuly');

            return response()->json([
                'status' => true,
                'message' => 'Category Updated Successfuly'
            ]);


        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }





    }


    public function destroy($courseId, Request $request)
    {
        $course = course::find($courseId);
        if (empty($course)) {
            $request->session()->flash('error', 'Course not found');
            return response()->json([
                'status' => true,
                'message' => 'Category not found'
            ]);
        }

        File::delete(public_path() . '/uploads/course/' . $course->CourseBanner);
        File::delete(public_path() . '/uploads/course-logo/' . $course->CourseLogo);

        $course->delete();

        $request->session()->flash('error', 'Course Deleted Successfully');

        return response()->json([
            'status' => true,
            'message' => 'Course Deleted Successfully'
        ]);
    }
}