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
            $table->string('name');
            $table->text('value')->nullable();
            $table->timestamps();
        });
        DB::table('settings')->insert(array(
            array('id'=> 1,'name'=> "company_name",'value'=> null),
            array('id'=> 2,'name'=> "company_address",'value'=> null),
            array('id'=> 3,'name'=> "company_email",'value'=> null),
            array('id'=> 4,'name'=> "company_logo",'value'=> null),
            array('id'=> 5,'name'=> "company_facebook",'value'=> null),
            array('id'=> 6,'name'=> "company_twitter",'value'=> null),
            array('id'=> 7,'name'=> "company_linkedin",'value'=> null),
            array('id'=> 8,'name'=> "company_instagram",'value'=> null),
            array('id'=> 9,'name'=> "company_about",'value'=> null),
            array('id'=> 10,'name'=> "show_company_name",'value'=> null),
            array('id'=> 11,'name'=> "show_logo",'value'=> null),
            array('id'=> 12,'name'=> "company_about_image",'value'=> null),
            array('id'=> 13,'name'=> "company_vission_mission",'value'=> null),
            array('id'=> 14,'name'=> "company_vission_mission_image",'value'=> null),
            array('id'=> 15,'name'=> "enable_blog",'value'=> null),
            array('id'=> 16,'name'=> "company_phone",'value'=> null),
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
