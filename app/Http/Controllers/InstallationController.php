<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class InstallationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (!file_exists(public_path('installation.php'))) {
      return redirect()->route('welcome');
    }
    return view('installation');
  }

  public function store(Request $request)
  {
    switch ($request->action) {
      case 'create_database':
        Artisan::call('make:database');
        break;
      case 'migrations':
        Artisan::call('migrate');
        break;
      case 'finish':
        $database_name = config('database.connections.mysql.database');
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME =  ?";
        $db = DB::select($query, [$database_name]);
        if (empty($db)) {
          return redirect()->back();
        } elseif ('write something') {
          return redirect(route('settings'));
        }
        // if(){
        //     unlink(public_path('installation.php'));
        //     return redirect()->route('welcome');
        // }else 
        break;
    }
    return redirect()->route('installation');
  }
}
