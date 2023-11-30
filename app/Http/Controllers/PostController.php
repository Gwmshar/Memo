<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('layouts.UpdatePost');
    }

    public function store()
    {
        $temp = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $temp['user_id'] = auth()->id();
        Post::create($temp);
        return redirect()->route('home');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('home');
    }
    public function edit(Post $post)
    {
        return view('layouts.EditPost', [
            'post' => $post
        ]);
    }
    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $post->title = request()->get('title', '');
        $post->description = request()->get('description', '');
        $post->save();
        return redirect()->route('home');
    }
}
