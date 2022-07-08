<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('settings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('key');
      $table->text('value')->nullable();
      $table->timestamps();
    });
    DB::table('settings')->insert(array(
      array('id' => 1, 'key' => "blog_name", 'value' => null),
      array('id' => 2, 'key' => "blog_address", 'value' => null),
      array('id' => 3, 'key' => "blog_email", 'value' => null),
      array('id' => 4, 'key' => "blog_logo", 'value' => null),
      array('id' => 5, 'key' => "blog_facebook", 'value' => null),
      array('id' => 6, 'key' => "blog_twitter", 'value' => null),
      array('id' => 7, 'key' => "blog_linkedin", 'value' => null),
      array('id' => 8, 'key' => "blog_instagram", 'value' => null),
      array('id' => 9, 'key' => "blog_about", 'value' => null),
      array('id' => 10, 'key' => "show_blog_name", 'value' => null),
      array('id' => 11, 'key' => "show_logo", 'value' => null),
      array('id' => 12, 'key' => "blog_about_image", 'value' => null),
      array('id' => 13, 'key' => "blog_vission_mission", 'value' => null),
      array('id' => 14, 'key' => "blog_vission_mission_image", 'value' => null),
      array('id' => 15, 'key' => "enable_blog", 'value' => null),
      array('id' => 16, 'key' => "blog_phone", 'value' => null),
    ));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('settings');
  }
}
