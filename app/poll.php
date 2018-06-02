<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poll extends Model
{
    protected $table = 'poll';

    public function veranstaltung() {
        return $this->belongsTo('App\Veranstaltungen', 'id', 'VerID');
    }

    public function options() {
        return $this->hasMany('App\option', 'pollid', 'pollid');
    }
    public $timestamps = false;
}
