<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\controllers\UserController;
use App\Models\User;
use Image;

class UserController extends Controller

{
    public function index(){
        return view('welcome');
    }

    public function fomeView(){
        return view('imgview');
    }

    public function imgResize(Request $request)
    {
    
        if($request->hasfile('file')) {
            $file = $request->file;
            $input['imagename'] = time().'.'.$file->extension();
            $destinationPath = public_path('upload');
            
            $img = Image::make($file->path());
            $img->resize($request->height, $request->width, function ($const) {
            $const->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
        }
        return view('imgview');
    }
}