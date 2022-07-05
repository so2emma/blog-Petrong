<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'user_id', 'title', 'content', 'postImage', 'category_id', 'slider', 'featured',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
