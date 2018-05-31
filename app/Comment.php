<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public function comments(){
        return $this->belongsTo('app/Veranstaltungen');
    }
}