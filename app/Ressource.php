<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $table = 'veranstaltungen';

    protected $fillable = ['Name'];
}
