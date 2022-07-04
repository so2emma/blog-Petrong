<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscriber;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PasswordNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;
use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function documentation()
  {
    return view('documentation');
  }

  public function pagesprofile()
  {
    // $user = Auth::user();
    $user = User::findOrFail(auth()->user()->id);
    return view('pagesprofile', compact('user'));
  }

  public function update(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'phone' => 'nullable|string',
      'country' => 'nullable|string',
      'message' => 'nullable|string',
      // 'role' => 'string',
    ]);

    $user = User::findOrFail(auth()->user()->id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->country = $request->country;
    $user->message = $request->message;
    $user->phone = $request->phone;
    // $user->role = $request->role;

    $user->update();
    return redirect()->back()->with(['status' => 'Profile updated successfully.']);
  }

  public function picture(Request $request)
  {
    $this->validate($request, [
      'profile_photo' => 'required|mimes:jpeg,jpg,png|max:1999',
    ]);

    $user = User::findOrFail(auth()->user()->id);

    $file = $request->file('profile_photo');
    $filename = $file->getClientOriginalName();
    $file->storeAs('public/', $filename);
    $image = $filename;

    $user['profile_photo'] = $image;

    $user->update();
    return redirect()->back()->with(['status' => 'Picture updated successfully.']);
    // return redirect()->route('pagesprofile',compact('user'))->with('success', 'Updated successfully');
  }

  public function reset(Request $request){
    $request->validate([
      'current_password' => ['required'],
      'new_password' => ['required'],
      'new_confirm_password' => ['same:new_password'],
    ]);

    $user = User::find(auth()->user()->id);

    if (!Hash::check($request->current_password, $user->password)) {
      return redirect()->back()->withErrors(['current_password' => 'Password does not match our records!']);
    }

    User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
    return back()->with('status', 'Password successfully changed!');
  }

  public function author()
  {
    $authors = User::where('role', '=', 'author')->paginate(10);
    return view('author.index', compact('authors'));
  }

  public function create()
  {
    return view('author.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'phone' => 'nullable',
      'facebook' => 'nullable',
      'twitter' => 'nullable',
      'instagram' => 'nullable',
      'linkedin' => 'nullable',
      'role' => 'required',
    ]);

    // $data = $request->all();
    $data = $request->except('password');
    $data['password'] = Hash::make($request['password']);


    $user = User::create($data);
    Notification::send($user, new PasswordNotification($request['password']));
    return redirect()->route('author.index')->with('status', 'New Author was added successfully');
  }

  public function edit($id)
  {
    $author = User::find($id);
    return view('author.edit', compact('author'));
  }

  public function updateAuthor(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'phone' => 'nullable',
      'facebook' => 'nullable',
      'twitter' => 'nullable',
      'instagram' => 'nullable',
      'linkedin' => 'nullable',
      'role' => 'required',
    ]);

    $author = User::find($request->id);
    $author->name = $request->name;
    $author->email = $request->email;
    $author->phone = $request->phone;
    $author->facebook = $request->facebook;
    $author->twitter = $request->twitter;
    $author->instagram = $request->instagram;
    $author->linkedin = $request->linkedin;
    $author->role = $request->role;
    $author->update();
    return redirect()->back()->with('status', 'Author updated successfully');
  }

  public function destroy(Request $request)
  {
    $author = User::find($request->id);
    $picture = $author->image_path;
    if ($picture) {
      Storage::delete($picture);
    }
    $author->delete();
    return redirect()->back()->with('status', 'Author deleted successfully');
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
