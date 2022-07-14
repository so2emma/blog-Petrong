<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
  protected $fillable = [
    'key', 'value'
  ];

  static function template_is(){
    $template_id = Settings::where('key', 'template')->first()->value;
    $template = Template::find($template_id);
    return $template->folder;
  }
}
