<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function posts(){
    return $this->belongsToMany('App\Post','post_category');
  }

  public function submenu(){
    return $this->belongsTo('App\Submenu');
  }
}
