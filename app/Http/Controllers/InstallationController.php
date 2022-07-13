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
  public function hd_c()
  {
    $database_name = config('database.connections.mysql.database');
    $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME =  ?";
    try {
      $db = DB::select($query, [$database_name]);
      return empty($db);
    } catch (\Throwable $th) {
      //throw $th;
      return true;
    }
  }

  public function hm_()
  {
    try {
      $tables = DB::select('SHOW TABLES');
      if (count($tables) > 2) {
        return true;
      }
    } catch (\Throwable $th) {
      return false;
    }
  }

  public function index()
  {
    $hd_c = $this->hd_c();
    $hm_ = $this->hm_();

    if (!file_exists(public_path('installation.php'))) {
      return redirect()->route('welcome');
    }
    return view('setup.installation', compact('hd_c', 'hm_'));
  }

  public function store(Request $request)
  {
    $hd_c = $this->hd_c();
    $hm_ = $this->hm_();

    switch ($request->action) {
      case 'create_database':
        Artisan::call('make:database');
        break;
      case 'migrations':
        Artisan::call('migrate');
        Artisan::call('db:seed', ['--class'=>'SettingsSeeder']);
        break;
      case 'finish':
        if ($hd_c) 
          return redirect()->back();
        else
          return redirect(route('makesuperadmin'));
        break;
    }
    return redirect()->route('installation', compact('hd_c', 'hm_'));
  }
}
