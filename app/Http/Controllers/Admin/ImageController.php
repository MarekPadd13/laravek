<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function index() {
        return view('admin.image');
    }

    public function upload(Request $request) {
        $path = $request->file('image')->store('images','public');
        return view('admin.image',compact('path'));
    }
}
