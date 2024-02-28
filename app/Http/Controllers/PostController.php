<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('post-create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'text' => $request->text,
            'status' => 465,
        ]);

        return redirect()->back()->with('message', "post created successfuly!");

    }

    public function edit($id)
    {

        $post = Post::findOrFail($id);

        return view('update-post', compact('post'));

    }

    public function update(Request $request)
    {

        $post_id = $request->id;

        $validated = $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $post = Post::findOrFail($post_id);

        $post->update($request->all());

        return redirect()->route('index')->with('message', "post updated Successfuly!");

    }


    public function delete($id){

      $post = Post::findOrFail($id);

      $post->delete();

      return redirect()->back()->with('message', "Post deleted Successfuly!");
     
    }

}
