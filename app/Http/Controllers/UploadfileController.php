<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadfileController extends Controller
{
    public function index()
    {
     return view('upload');
    }

    public function upload(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|max:2048'
     ]);

     $image = $request->file('select_file');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
     return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }
}
