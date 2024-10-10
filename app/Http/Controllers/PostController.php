<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user')->latest()->get();
        return view('index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);
        $data = $request->all();
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('posts', 'public');
            $data['picture'] = $path;
        }
        $data['user_id'] = auth()->id();
        Post::create($data);
        return redirect()->back()->with('success', 'Post created successfully!');
    }


    public function show(Post $post){
        $post->load('user');
        $user = auth()->user();
        return view('post.show', compact('post', 'user'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string',
        ]);
        $post->content = $request->input('content');
        if ($request->hasFile('picture')) {
            if ($post->picture && Storage::disk('public')->exists($post->picture)) {
                Storage::disk('public')->delete($post->picture);
            }
            $path = $request->file('picture')->store('posts', 'public');
            $post->picture = $path;
        }
        $post->save();
        return redirect()->back()->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post){
        if (auth()->user()->id !== $post->user_id) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }
        if (Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }

}
