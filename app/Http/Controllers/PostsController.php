<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function __construct(){
    $this->middleware('auth')->except(['index', 'show']);
  }
  public function index()
  {
   $posts = Post::latest()->paginate(3);
   $archives = Post::archives();
   $pagetitle = "blog";
   return view('posts.index', compact('posts', 'pagetitle'));
  }

  public function show(\App\Post $post)
  {
    $previous = Post::where('id', '<' ,$post->id)->first();
    $next = Post::where('id', '>', $post->id)->first();
    $pagetitle = "blog";
    $archives = Post::archives();
   return view('posts.show', compact('post', 'pagetitle', 'previous', 'next'));
  }

  public function create()
  {
   return view ('posts.create');
  }

  public function store()
  {
    $this->validate(request(),[
    'title' => 'required',
    'body'  => 'required'
  ]);

    auth()->user()->publish(new Post(request(['title','body'])));


   return redirect('/blog');
   // return view ('posts.index');
  }
}
