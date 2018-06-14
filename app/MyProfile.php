<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyProfile extends Model
{
    protected $table = 'MyProfile';

    public function User(){
        return $this->hasOne('app/User');
    }


}
