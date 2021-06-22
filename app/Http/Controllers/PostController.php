<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Advertisement;
class PostController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::take(1)->get();  
    $posts = Post::take(10)->get();
        
  return view('blog.index', compact('posts','advertisements'));
    }

    public function show($post)
    {
        $advertisements = Advertisement::take(1)->get();
        $posts = Post::where('id','LIKE',$post)->get();
        return view('blog.show', compact('posts','advertisements'));

    }
}
