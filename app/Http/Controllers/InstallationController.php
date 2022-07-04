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
        // if(!file_exists(public_path('installation.php'))){
        //     return redirect()->route('welcome');
        // }
        return view('installation');
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
        switch($request->action){
            case 'create_database': Artisan::call('make:database');
                break;
            case 'migrations': Artisan::call('migrate');
                break;
            case 'finish': 
                $database_name = config('database.connections.mysql.database');
                $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME =  ?";
                $db = DB::select($query, [$database_name]);
                if(empty($db)) {
                    return redirect()->back();
                }elseif('write something') {
                    return 'db already exists!';
                }
                        // if(){
                        //     unlink(public_path('installation.php'));
                        //     return redirect()->route('welcome');
                        // }else 
                break;
        }
        return redirect()->route('installation');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // require base_path('public/installation.php');
    // if(file_exists(public_path('test.php'))){
    //     unlink(public_path('test.php'));
    //     return 'deleted';
    // }
    // else return 'not found';

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
