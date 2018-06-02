<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    protected $table = 'option';

    public function poll() {
        return $this->belongsTo('App\poll', 'pollid', 'pollid');
    }
    public $timestamps = false;

}
