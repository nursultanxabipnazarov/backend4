<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function index(){
         $posts =  Post::get();
        
         dd($posts);
         
    }

    public function create(){
        return view('admin.post-create');
    }


    public function store(Request $request){
        $title = $request->title;
        $body = $request->body;
        Post::create([
            'title'=>$title,
            'body'=> $body
        ]);

        return redirect()->route('postCreate');


    }
}
