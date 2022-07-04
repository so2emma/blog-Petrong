<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PagesController extends Controller
{
   
    public function blog()
    {   
        $posts = Post::paginate(5);
        return view('blog.blog', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrfail($id);
        return view('blog.singlepost',compact('post'));
    }
    
    public function postcategory($id)
    {
        $posts = Post::where('category_id', $id)->paginate(5);
        return view('blog.category', compact('posts'));
    }

    public function featuredposts($id)
    {
        $posts = Post::where('id', $id)->paginate(5);
        return view('service', compact('posts'));
    }
}
