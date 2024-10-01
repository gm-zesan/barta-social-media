<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $posts = Post::with('user')->latest()->get();
        $user = $request->user();
        return view('index', compact('user', 'posts'));
    }
}
