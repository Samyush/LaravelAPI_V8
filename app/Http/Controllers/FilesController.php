<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function show(){
        return response()->download(storage_path('app\GraceHopper.pdf'), 'AmazingGrace');
    }

    public function create(Request $request){
        $path = $request->file('photo')->store('testing');
        return response()->json(['path'=>$path], 200);
    }
}
