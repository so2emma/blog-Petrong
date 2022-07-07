<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $settings = Settings::all();
    return view('settings', compact('settings'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Settings  $settings
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    // dd($request->all());
    $this->validate($request, [
      'company_name' => 'required',
      'company_address' => 'required',
      'company_phone' => 'required',
      'company_logo' => 'required|mimes:jpeg,jpg,png',
      'company_email' => 'required',
      'show_company_name' => 'nullable|boolean',
      'show_logo' => 'nullable|boolean',
      'company_about' => 'required',
      'enable_blog' => 'nullable|boolean',
      'company_facebook' => 'nullable|string',
      'company_twitter' => 'nullable|string',
      'company_linkedin' => 'nullable|string',
      'company_instagram' => 'nullable|string',
      'company_about_image' => 'required|mimes:jpeg,jpg,png|max:1999',
      'company_vission_mission' => 'required',
      'company_vission_mission_image' => 'required|mimes:jpeg,jpg,png|max:1999',

    ]);
    foreach ($request->except(['company_logo', 'company_about_image', 'company_vission_mission_image', '_token']) as $key => $value) {
      $setting = Settings::where('name', $key)->update(['value' => $value]);
    }

    foreach ($request->only(['company_logo', 'company_about_image', 'company_vission_mission_image']) as $key => $value) {
      if (!empty($value)) {
        $filename = $value->getClientOriginalName();
        $value->storeAs('public/', $filename);
        Settings::where('name', $key)->update(['value' => $filename]);
      }
    }

    return redirect()->back()->with(['status' => 'Settings updated successfully.']);
  }
}
