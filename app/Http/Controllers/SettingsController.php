<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

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
      'blog_name' => 'required',
      'blog_address' => 'required',
      'blog_phone' => 'required',
      'blog_logo' => 'required|mimes:jpeg,jpg,png',
      'blog_email' => 'required',
      'show_blog_name' => 'nullable|boolean',
      'show_logo' => 'nullable|boolean',
      'blog_about' => 'required',
      'enable_blog' => 'nullable|boolean',
      'blog_facebook' => 'nullable|string',
      'blog_twitter' => 'nullable|string',
      'blog_linkedin' => 'nullable|string',
      'blog_instagram' => 'nullable|string',
      'blog_about_image' => 'required|mimes:jpeg,jpg,png|max:1999',
      'blog_vission_mission' => 'required',
      'blog_vission_mission_image' => 'required|mimes:jpeg,jpg,png|max:1999',
    ]);
    foreach ($request->except(['blog_logo', 'blog_about_image', 'blog_vission_mission_image', '_token']) as $key => $value) {
      Settings::where('key', $key)->update(['value' => $value]);
    }

    foreach ($request->only(['blog_logo', 'blog_about_image', 'blog_vission_mission_image']) as $key => $value) {
      if (!empty($value)) {
        $filename = $value->getClientOriginalName();
        $value->storeAs('public/', $filename);
        Settings::where('key', $key)->update(['value' => $filename]);
      }
    }

    return redirect()->back()->with(['status' => 'Settings updated successfully.']);
  }
}
