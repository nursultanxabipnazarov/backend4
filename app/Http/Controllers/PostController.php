<?php

namespace App\Http\Controllers;

use App\Models\Post;


use Illuminate\Http\Request;


class PostController extends Controller
{   
    public function index(){
       $posts =   Post::all();
        return view('index',compact('posts'));
    }

    public function create(){
       return view('post-create');
    }

    public function store(Request $request){
   
        $validated = $request->validate([
            'title'=>'required',
            'text'=>'required'
        ]);

        Post::create($request->all());

        return redirect()->back()->with('message',"post created successfuly!");

        





     
    }
}
