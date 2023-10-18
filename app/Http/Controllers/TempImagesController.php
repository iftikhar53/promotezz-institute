<?php

namespace App\Http\Controllers;

use App\Models\TempImage;
use Illuminate\Http\Request;

class TempImagesController extends Controller
{
    public function create(Request $request){
        $image = $request->image;

        if(!empty($image)){
           $newName = time().'.'.$image->extension();

           $tempImage = new TempImage();
           $tempImage->name = $newName;
           $tempImage->save();


            $image->move(public_path().'/temp',$newName);

            return response()->json([
                'status'=> true,
                'image_id' => $tempImage->id,
                'imagePath' => asset('/temp/'.$newName),
                'message' => 'image uploaded successfully'
            ]);
        }
    }
}
