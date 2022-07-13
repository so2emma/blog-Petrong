<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\InstallationController;
use App\Models\Settings;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  /**
   * Show the application registration form.
   *
   * @return \Illuminate\View\View
   */
  public function showRegistrationForm()
  {
    $in = new InstallationController;
    if ( !$in->hd_c() & $in->hm_() & !file_exists(public_path('installation.php')))
      return redirect(route('welcome'));
    return view('setup.createadmin');
  }

  public function register(Request $request)
  {
    $this->validator($request->all())->validate();
    event(new Registered($user = $this->create($request->all())));
    $this->guard()->login($user);
    unlink(public_path('installation.php'));

    foreach ($request->except(['blog_logo', 'name', 'email', 'password', 'password-confirm', '_token']) as $key => $value) {
      Settings::where('key', $key)->update(['value' => $value]);
    }

    if ($request->hasFile('blog_logo')) {
      $file = $request->blog_logo;
      $filename = 'logo.'.$file->getClientOriginalExtension();
      $file->storeAs('blog_sets/', $filename);
      Settings::where('key', 'blog_logo')->update(['value' => $filename]);
    }

    return redirect()->route('choosetemplate');
  }

  /**
   * Get the guard to be used during registration.
   *
   * @return \Illuminate\Contracts\Auth\StatefulGuard
   */
  protected function guard()
  {
    return Auth::guard();
  }
  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'blog_name'         => 'required|string|max:55',
      'blog_email'        => 'required|email|max:55',
      'blog_phone'        => 'required|string|max:20',
      'blog_address'      => 'nullable|string|max:255',
      'blog_logo'         => 'nullable|mimes:jpeg,jpg,png',
      'name'              => 'required|string|max:55',
      'email'             => 'required|string|email|max:55|unique:users',
      'password'          => 'required|string|min:8|confirmed',
      'password_confirmation'  => 'required|string|min:8'
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\Models\User
   */
  protected function create(array $data)
  {
    return User::create([
      'name'      => $data['name'],
      'email'     => $data['email'],
      'role'      => "admin",
      'password'  => Hash::make($data['password']),
    ]);
  }
}
