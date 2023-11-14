<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request){
        $request->validate([
            'image'=>['required', 'min:10', 'max:500','mimes:png,jpg,gif']
        ]);
        $request->image->storeAs('/images', 'new_image.jpg');

        return redirect()->back();
    }

    public function download(){
        return response()->download(public_path('/storage/images/new_image.jpg'));
    }
}
