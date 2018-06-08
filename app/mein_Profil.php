<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mein_Profil extends Model
{
    protected $table = 'mein_profil';

    public function User(){
        return $this->belongsTo('app/User');
    }


}
