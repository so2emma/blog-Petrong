<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
  public function index()
  {
    $in = new InstallationController;
    if ( !$in->hd_c() & $in->hm_() & !file_exists(public_path('installation.php')))
      return redirect(route('welcome'));
    $templates = Template::all();
    return view('setup.choosetemplate', compact('templates'));
  }

  public function choose(Request $request){
    Settings::where('key', "template")->update(['value' => $request->template_id]);

    return redirect()->route('settings');
  }
}
