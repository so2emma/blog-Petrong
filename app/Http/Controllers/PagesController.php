<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PagesController extends Controller
{

  public function blog()
  {
    $posts = Post::paginate(10);
    return view('blog.blog', compact('posts'));
  }

  public function show($id)
  {
    $categories = Category::all();
    $post = Post::findOrfail($id);
    return view('blog.singlepost', compact('post', 'categories'));
  }

  public function postcategory($id)
  {
    $categories = Category::all();
    $posts = Post::where('category_id', $id)->paginate(5);
    return view('blog.category', compact('posts', 'categories'));
  }

  public function featuredposts($id)
  {
    $posts = Post::where('id', $id)->paginate(5);
    return view('service', compact('posts'));
  }
}
