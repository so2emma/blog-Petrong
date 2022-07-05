<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Notifications\SubscriberNotification;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $users = User::where('role', '=', 'Admin')->get();
    $posts = Post::paginate(5);
    return view('post.index', compact('posts', 'users'));
  }
  
  public function create()
  {
    $categories = Category::all();
    return view('post.create', compact('categories'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'subtitle' => 'nullable|string',
      'content' => 'required',
      'postImage' => 'required',
      'postImage' => 'mimes:jpeg,jpg,png|max:1999',
      'category_id' => 'required',
    ]);
    $file = $request->file('postImage');
    $filename = $file->getClientOriginalName();
    $file->storeAs('public/', $filename);
    $postImage = $filename;
    $post = Post::create(['user_id' => Auth::id(), 'title' => $request->title, 'subtitle' => $request->subtitle, 'content' => $request->content, 'postImage' => $postImage, 'category_id' => $request->category_id]);
    
    if ($post->category_id == '1' || $post->category_id == '2' || $post->category_id == '3') {
      return redirect()->route('post.index')->with('status', 'Post was created successfully');
    } else {
      $subscribers = Subscriber::all();
      Notification::send($subscribers, new SubscriberNotification($post));
      return redirect()->route('post.index')->with('status', 'Post was created successfully');
    }
  }
  
  public function edit($id)
  {
    $post = Post::find($id);
    return view('post.edit', compact('post'));
  }

  public function update(Request $request)
  {
    $this->validate(
      $request,
      [
        'title' => 'required',
        'subtitle' => 'nullable|string',
        'content' => 'required',
        'postImage' => 'nullable|mimes:doc,pdf,docx,txt,zip,jpeg,jpg,png|max:1999',
        'category_id' => 'required',
      ]
    );

    $post = Post::find($request->id);
    $post->user_id = Auth::user()->id;
    $post->title = $request->title;
    $post->subtitle = $request->subtitle;
    $post->content = $request->content;
    $post->category_id = $request->category_id;
    $file = $request->file('postImage');
    $filename = $file->getClientOriginalName();
    $file->storeAs('public/', $filename);
    $image = $filename;
    $post->postImage = $image;
    $post->update();

    return redirect()->back()->with('status', 'Post updated successfully');
  }

  public function destroy(Request $request)
  {
    $post = Post::find($request->id);
    $postImage = $post->image_path;
    if ($postImage) {
      Storage::delete($postImage);
    }

    $post->delete();
    return redirect()->back()->with('status', 'Post deleted successfully');
  }
}
