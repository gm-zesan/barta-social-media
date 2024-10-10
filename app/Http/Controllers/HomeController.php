<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $posts = Post::with('user')->latest()->get();
        $user = $request->user();
        return view('index', compact('user', 'posts'));
    }

    public function search(Request $request){
        $query = $request->input('query');
        $searchedUser = User::where('name', 'like', '%' . $query . '%')
        ->orWhere('email', 'like', '%' . $query . '%')
        ->first();
        $posts = $searchedUser ? $searchedUser->posts()->get() : collect();
        $user = $request->user();
        return view('index', compact('user', 'posts'));
    }

}
