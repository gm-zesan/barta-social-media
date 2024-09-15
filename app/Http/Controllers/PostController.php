<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Request $request){
        return view('post.show',[
            'user' => $request->user(),
        ]);
    }
}
