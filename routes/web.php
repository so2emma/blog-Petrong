<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('installation', [InstallationController::class, 'index'])->name('installation');
Route::post('installation', [InstallationController::class, 'store'])->name('installation');
// Route::post('create_database', [InstallationController::class,'create_database'])->name('create_database');
// Route::post('create_tables', [InstallationController::class,'create_table'])->name('create_table');
// Route::post('create_settings', [InstallationController::class,'settings'])->name('create_settings');
Route::view('email', 'email');
Auth::routes();
Route::group(['middleware' => 'checkrole'], function () {
  Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
  Route::post('settings/update', [SettingsController::class, 'update'])->name('update.settings');
});

Route::group(['middleware' => 'installable'], function () {
  Route::group(['middleware' => 'checkrole'], function () {
    Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('author/index', [UserController::class, 'author'])->name('author.index');
    Route::get('author/create', [UserController::class, 'create'])->name('author.create');
    Route::get('author/edit/{id}', [UserController::class, 'edit'])->name('author.edit');
    Route::post('author/store', [UserController::class, 'store'])->name('author.store');
    Route::post('author/update', [UserController::class, 'updateAuthor'])->name('author.update');
    Route::post('author/destroy', [UserController::class, 'destroy'])->name('author.destroy');
  });

  Route::get('/', [HomeController::class, 'index'])->name('welcome');
  Route::get('about', [HomeController::class, 'about'])->name('about');
  Route::get('contact', [HomeController::class, 'contact'])->name('contact');
  Route::post('contact', [HomeController::class, 'sendContact'])->name('send.contact');
  Route::post('subscribe', [HomeController::class, 'save'])->name('subscriber.save');

  Route::get('blog', [PagesController::class, 'blog'])->name('blog');
  Route::get('blog/singlepost/{id}', [PagesController::class, 'show'])->name('post.show');
  Route::get('blog/category/{id}', [PagesController::class, 'postcategory'])->name('post.category');
  Route::get('service/{id}', [PagesController::class, 'featuredposts'])->name('service');

  Route::get('pagesprofile', [UserController::class, 'pagesprofile'])->name('profile');

  Route::get('post/index', [PostController::class, 'index'])->name('post.index');

  // Route::resource('post', 'PostController');

  Route::post('profile/update', [UserController::class, 'update'])->name('update.profile');

  Route::post('picture/update', [UserController::class, 'picture'])->name('update.picture');

  Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
  Route::get('post/create', [PostController::class, 'create'])->name('post.create');
  Route::post('post/store', [PostController::class, 'store'])->name('post.store');
  Route::post('post/update', [PostController::class, 'update'])->name('post.update');
  Route::post('post/destroy', [PostController::class, 'destroy'])->name('post.destroy');


  Route::post('change/password', [UserController::class, 'reset'])->name('change.password');

  Route::get('home', [HomeController::class, 'index'])->name('home');
  Route::get('index', [UserController::class, 'dashboard'])->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('documentations', function () {
  return view('documentation');
})->name('documentations');