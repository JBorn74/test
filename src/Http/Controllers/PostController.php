<?php

namespace JBorn74\Posts\Http\Controllers;
use Illuminate\Http\Request;
use JBorn74\Posts\Http\Controllers\Controller;
use JBorn74\Posts\Models\Post;

class PostController extends Controller
{
    public function index(){
//        Post::create(['title'=>'Title']);
        $posts = Post::all();
        return view('posts::index')->with('posts',$posts);
    }

}
