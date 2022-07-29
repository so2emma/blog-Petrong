<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
  public function index()
  {
    $authors = User::all();
    $sliderposts = Post::where('category_id', '2')->get();
    $featuredposts = Post::where('category_id', '3')->get();
    return view('main.home', compact('authors', 'sliderposts', 'featuredposts'));
  }

  public function about()
  {
    $teamposts = Post::where('category_id', '1')->get();
    return view('blog.about', compact('teamposts'));
  }

  public function contact()
  {
    return view('blog/contact');
  }


  public function save(Request $request)
  {
    $this->validate( $request, [
      'name' => 'required',
      'email' => 'required',
    ]);

    $subscribers = $request->all();
    // $subscriber = Subscriber::create($subscribers);
    Subscriber::create($subscribers);
    // $name = $subscriber->name;
    return redirect()->back()->with('status', 'Thanks for subscribing, You will be notified when new posts are made.');
  }

  public function sendContact(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'subject' => 'required',
      'message' => 'required',
    ]);
    $user = [];
    $user['name'] = $request->name;
    $user['email'] = $request->email;
    $user['subject'] = $request->subject;
    $user['message'] = $request->message;

    // $admin = User::where('role', '=', 'admin')->get();
    // Notification::send($admin,new ContactNotification($user));
    $name = $request->name;
    return redirect()->back()->with(['status' => $name . ', Thanks for engaging, your message has been sent.']);
  }

  public function dashboard()
  {
    $categories = Category::all();
    $posts = Post::all();
    $subscribers = Subscriber::all();
    $authors = User::where('role', '=', 'author')->get();
    return view('index', compact('posts', 'authors', 'categories', 'subscribers'));
  }
}
