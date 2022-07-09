<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Template extends Model
{
  protected $fillable = [
    'name', 'preview', 'folder'
  ];

  public function getImagesAttribute(){
    $images = Storage::files('templates/'.$this->folder);
    return $this->attributes['images'] = $images;
  }

  public $appends = [ 'images' ];
}
