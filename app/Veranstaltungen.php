<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veranstaltungen extends Model
{
  protected $table = 'veranstaltungen';

  public function comments(){
      return $this->hasMany('app/Comment');
  }
}
