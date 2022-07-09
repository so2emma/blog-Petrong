<?php

namespace Database\Seeders;

use App\Models\Settings;
use App\Models\Template;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $initial_nulls = [
      "blog_name", "blog_phone", "blog_address", "blog_email", "blog_logo",
      "blog_facebook", "blog_twitter", "blog_linkedin", "blog_instagram", "blog_about",
      "enable_blog", "show_blog_name", "show_logo", "blog_about_image",
      "blog_vission_mission", "blog_vission_mission_image", "template_id"
    ];
    foreach ($initial_nulls as $key) {
      Settings::create([
        'key' => $key,
        'value' => null
      ]);
    }

    // Templates
    $templates = [
      "Sunness", "Platonic"
    ];
    foreach ($templates as $key) {
      Template::create([
        'name'    => $key,
        'preview' => 'preview.png',
        'folder'  => strtolower($key)
      ]);
    }
  }
}
