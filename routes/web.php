<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::GET('installation', [InstallationController::class, 'index'])->name('installation');
Route::POST('installation', [InstallationController::class, 'store'])->name('installation');
Route::GET('/createadmin', [RegisterController::class, 'showRegistrationForm'])->name('makesuperadmin');
Route::GET('/template', [TemplateController::class, 'index'])->name('choosetemplate');
Route::POST('/template', [TemplateController::class, 'choose'])->name('choosetemplate');

// Route::POST('create_database', [InstallationController::class,'create_database'])->name('create_database');
// Route::POST('create_tables', [InstallationController::class,'create_table'])->name('create_table');
// Route::POST('create_settings', [InstallationController::class,'settings'])->name('create_settings');

Route::view('email', 'email');
Auth::routes();

Route::group(['middleware' => ['installable','template']], function () {

  Route::group(['middleware' => 'checkrole'], function () {
    Route::GET('categories', [CategoryController::class, 'index'])->name('category.index');
    Route::GET('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::GET('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::POST('category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::POST('category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::POST('category/store', [CategoryController::class, 'store'])->name('category.store');

    Route::GET('authors', [UserController::class, 'author'])->name('author.index');
    Route::GET('author/create', [UserController::class, 'create'])->name('author.create');
    Route::GET('author/edit/{id}', [UserController::class, 'edit'])->name('author.edit');
    Route::POST('author/store', [UserController::class, 'store'])->name('author.store');
    Route::POST('author/update', [UserController::class, 'updateAuthor'])->name('author.update');
    Route::POST('author/destroy', [UserController::class, 'destroy'])->name('author.destroy');

    Route::GET('settings', [SettingsController::class, 'index'])->name('settings');
    Route::POST('settings/update', [SettingsController::class, 'update'])->name('update.settings');
  });

  Route::GET('/', [HomeController::class, 'index'])->name('welcome');
  Route::GET('about', [HomeController::class, 'about'])->name('about');
  Route::GET('contact', [HomeController::class, 'contact'])->name('contact');
  Route::POST('contact', [HomeController::class, 'sendContact'])->name('send.contact');
  Route::POST('subscribe', [HomeController::class, 'save'])->name('subscriber.save');

  Route::GET('blog', [PagesController::class, 'blog'])->name('blog');
  Route::GET('blog/singlePOST/{id}', [PagesController::class, 'show'])->name('post.show');
  Route::GET('blog/category/{id}', [PagesController::class, 'postcategory'])->name('post.category');
  Route::GET('service/{id}', [PagesController::class, 'featuredPOSTs'])->name('service');


  Route::GET('pagesprofile', [UserController::class, 'pagesprofile'])->name('profile');
  Route::POST('profile/update', [UserController::class, 'update'])->name('update.profile');
  Route::POST('picture/update', [UserController::class, 'picture'])->name('update.picture');

  Route::GET('posts', [PostController::class, 'index'])->name('post.index');
  Route::GET('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
  Route::GET('post/create', [PostController::class, 'create'])->name('post.create');
  Route::POST('post/store', [PostController::class, 'store'])->name('post.store');
  Route::POST('post/update', [PostController::class, 'update'])->name('post.update');
  Route::POST('post/destroy', [PostController::class, 'destroy'])->name('post.destroy');

  Route::POST('change/password', [UserController::class, 'reset'])->name('change.password');
  Route::GET('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::GET('documentations', function () {
  return view('documentation');
})->name('documentations');