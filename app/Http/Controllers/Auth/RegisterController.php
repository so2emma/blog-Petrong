<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    if (!file_exists(public_path('installation.php'))) {
      return redirect()->route('welcome');
    }
    return view('auth.register');
  }

  public function register(Request $request)
  {
    $this->validator($request->all())->validate();
    event(new Registered($user = $this->create($request->all())));
    $this->guard()->login($user);
    unlink(public_path('installation.php'));
    return redirect(route('settings'));
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
      'name'      => ['required', 'string', 'max:255'],
      'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password'  => ['required', 'string', 'min:8', 'confirmed'],
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
